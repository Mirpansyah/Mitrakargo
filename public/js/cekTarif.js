const formCekTarif = document.querySelector(".cek-tarif__form");
const API_CONTAINER = document.querySelector(".cek-tarif__fetch");
const loading = document.querySelector(".loading");

formCekTarif.addEventListener("submit", e => {
    e.preventDefault();
    API_CONTAINER.innerHTML = "";
    loading.style.display = "block";
    const kotaAsal = document.querySelector(".kota-asal").value;
    const kotaTujuan = document.querySelector(".kota-tujuan").value;
    fetch(
        `https://mitrakargo.co.id/api/cekTarif?asal=${kotaAsal}&tujuan=${kotaTujuan}`
    )
        .then(res => res.json())
        .then(res => {
            if (res.data.length === 0) {
                loading.style.display = "none";
                const html = `<div class="hasil-api">
                <div><h4>Hubungi Kami</h4></div>
                </div>`;
                API_CONTAINER.insertAdjacentHTML("beforeend", html);
            }
            const data = res.data;
            const fullHTML = data.map(e => {
                let html = `<div class="hasil-api">
        <h3>${e.asal} - ${e.tujuan}</h3>
        <div><h4>Harga : Rp.${e.harga}</h4></div>
        <div><h4>Min.Charge : ${e.min_charge}</h4></div>
        <div><h4>Estimasi : ${e.estimasi}</h4></div>
        <div><h4>Layanan : ${e.layanan}</h4></div>
      </div>`;
                return html;
            });
            loading.style.display = "none";
            API_CONTAINER.insertAdjacentHTML("beforeend", fullHTML);
        })
        .catch(err => {
            const html = `<div class="hasil-api">
        <div><h4>ERROR : ${err.message}</h4></div>
        </div>`;
            loading.style.display = "none";
            API_CONTAINER.insertAdjacentHTML("beforeend", html);
        });
});
