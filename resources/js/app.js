import './bootstrap';

function permission() {
    const permission = document.getElementById('push-permission')
    console.log(permission)
    if (!permission || !('Notification' in window) || !('serviceWorker') in navigator || Notification.permission !== 'default') {
        return;
    }

    permission.classList.remove('d-none')
    let button = permission.querySelector('button')

    button.addEventListener('click', askPermission)
}

async function registerServiceWorker() {
    const registration = await navigator.serviceWorker.register('/sw.js')
    let subscription = await registration.pushManager.getSubscription()
    if(!subscription) {
        subscription = await registration.pushManager.subscribe({
            userVisibleOnly: true,
            applicationServerKey: await getPublicKey()
        })

        console.log(subscription)
    }


    await saveSubscription(subscription)
}

async function askPermission() {
    const permission = await Notification.requestPermission()

    if (permission === 'granted') {
        registerServiceWorker()
    }
}

async function getPublicKey() {
    const {key} = await fetch('/api/vapid/key', {
        headers: {
            Accept: 'application/json'
        }
    }).then(r => r.json())
    return key
}

async function saveSubscription(subscription) {
    await fetch('/account/notifications/subscription', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            Accept: 'application/json'
        },
        body: JSON.stringify(subscription)
    })
}

permission()
