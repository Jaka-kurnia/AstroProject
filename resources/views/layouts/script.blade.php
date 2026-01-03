<script>
    document.addEventListener("DOMContentLoaded", function() {

        const slides = [{
                title: "Annual Reports",
                desc: "Jelajahi kinerja, strategi bisnis dan pencapaian kami setiap tahunnya.",
                image: "assets/img/service-5.jpg"
            },
            {
                title: "Financial Reports",
                desc: "Akses laporan audit terbaru serta komitmen kami terhadap transparansi.",
                image: "assets/img/service-2.jpg"
            },
            {
                title: "Presentation",
                desc: "Eksplorasi materi presentasi perusahaan untuk pemangku kepentingan.",
                image: "assets/img/service-3.jpg"
            },
            {
                title: "Presentation",
                desc: "Eksplorasi materi presentasi perusahaan untuk pemangku kepentingan.",
                image: "assets/img/service-4.jpg"
            },
        ];

        let currentIndex = 0;

        const sliderImage = document.getElementById("sliderImage");

        const activeTitle = document.getElementById("activeTitle");
        const activeDesc = document.getElementById("activeDesc");

        const nextTitle = document.getElementById("nextTitle");
        const nextDesc = document.getElementById("nextDesc");

        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");

        function renderSlider() {
            const active = slides[currentIndex];
            const next = slides[(currentIndex + 1) % slides.length];

            sliderImage.src = active.image;

            activeTitle.textContent = active.title;
            activeDesc.textContent = active.desc;

            nextTitle.textContent = next.title;
            nextDesc.textContent = next.desc;
        }

        nextBtn.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % slides.length;
            renderSlider();
        });

        prevBtn.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            renderSlider();
        });

        renderSlider(); // load pertama
    });
</script>
