document.addEventListener("DOMContentLoaded", function () {

    // ================= DATA (JSON) =================
    const services = [
        {
            title: "Wedding Planner",
            desc: "Perencanaan pernikahan dari konsep hingga hari H.",
            image: "/assets/img/wedding-planner.jpg"
        },
        {
            title: "Wedding Organizer",
            desc: "Koordinasi teknis dan eksekusi acara pernikahan.",
            image: "/assets/img/wedding-organizer.jpg"
        },
        {
            title: "Dokumentasi",
            desc: "Foto dan video profesional untuk momen sakral.",
            image: "/assets/img/dokumentasi.jpg"
        }
    ];

    // ================= ELEMENT =================
    const track = document.getElementById("serviceTrack");
    const image = document.getElementById("serviceImage");
    const next = document.getElementById("nextBtn");
    const prev = document.getElementById("prevBtn");

    if (!track || !image || !next || !prev) {
        console.error("Service slider element not found");
        return;
    }

    let index = 0;
    const cardWidth = 384; // 360 + gap-6 (24px)

    // ================= RENDER =================
    function render() {
        track.innerHTML = "";

        services.forEach((item, i) => {
            const card = document.createElement("div");
            card.className =
                "min-w-[360px] p-10 rounded-2xl transition-all duration-300 " +
                (i === index
                    ? "bg-blue-900 text-white shadow-2xl"
                    : "bg-white text-gray-600 shadow-lg mt-6");

            card.innerHTML = `
                <h4 class="text-2xl font-semibold mb-4">${item.title}</h4>
                <div class="w-12 h-1 bg-red-500 mb-6"></div>
                <p>${item.desc}</p>
            `;

            track.appendChild(card);
        });

        track.style.transform = `translateX(-${index * cardWidth}px)`;
        image.src = services[index].image;
    }

    // ================= EVENTS =================
    next.onclick = () => {
        index = (index + 1) % services.length;
        render();
    };

    prev.onclick = () => {
        index = (index - 1 + services.length) % services.length;
        render();
    };

    // ================= INIT =================
    render();
});
