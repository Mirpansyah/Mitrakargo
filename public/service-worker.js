const staticDevCoffee = "pwa-cache";
const OFFLINE_VERSION = 1;
const OFFLINE_URL = "offline.html";

const assets = [
    "/",
    // "/index.html",
    // "/offline.html",
    // "/css/style.css",
    // "/script.js",
    "/img/slider/1.webp",
    "/img/slider/2.webp",
    "/img/slider/3.webp",
    "/img/slider/4.webp"
];
self.addEventListener("install", installEvent => {
    installEvent.waitUntil(
        caches.open(staticDevCoffee).then(cache => {
            return cache.addAll(assets, { cache: "Reload" });
        })
    );
    self.skipWaiting();
});

self.addEventListener("activate", event => {
    console.log("[ServiceWorker] Activate");
    event.waitUntil(
        (async () => {
            // Enable navigation preload if it's supported.
            // See https://developers.google.com/web/updates/2017/02/navigation-preload
            if ("navigationPreload" in self.registration) {
                await self.registration.navigationPreload.enable();
            }
        })()
    );

    // Tell the active service worker to take control of the page immediately.
    self.clients.claim();
});

self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
        caches.match(fetchEvent.request).then(res => {
            return res || fetch(fetchEvent.request);
        })
    );
});
