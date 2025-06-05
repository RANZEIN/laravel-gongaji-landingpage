<section id="video" class="video-hero" style="min-height: 100vh; position: relative; overflow: hidden; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1592326871020-04f58c1a52f3?q=80&w=3165&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">
    <div class="container" style="position: relative; z-index: 10;">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center">
                <div class="video-content">
                    <h1 class="display-3 fw-bold mb-4" style="color: white !important; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                        Selamat Datang di Go Ngaji
                    </h1>
                    <p class="fs-4 mb-5" style="color: white !important; text-shadow: 1px 1px 2px rgba(0,0,0,0.8); max-width: 600px; margin: 0 auto 3rem;">
                        We are team of talented designers making websites with Bootstrap
                    </p>
                    <div class="play-button-wrapper" style="margin-top: 3rem;">
                        <div class="play-button-container" style="position: relative; display: inline-block;">
                            <button class="play-button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#videoModal"
                                    style="width: 80px; height: 80px; background: #28a745; border: none; border-radius: 50%; color: white; cursor: pointer; font-size: 1.5rem; position: relative; z-index: 20; box-shadow: 0 8px 25px rgba(40,167,69,0.4); transition: all 0.3s ease;">
                                <i class="ti ti-player-play-filled" style="margin-left: 3px; color: white;"></i>
                            </button>
                            <div class="pulse-ring" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80px; height: 80px; border: 3px solid rgba(40,167,69,0.7); border-radius: 50%; animation: pulse 2s infinite; z-index: 10;"></div>
                            <div class="pulse-ring" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80px; height: 80px; border: 3px solid rgba(40,167,69,0.5); border-radius: 50%; animation: pulse 2s infinite; animation-delay: 0.5s; z-index: 9;"></div>
                            <div class="pulse-ring" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80px; height: 80px; border: 3px solid rgba(40,167,69,0.3); border-radius: 50%; animation: pulse 2s infinite; animation-delay: 1s; z-index: 8;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="background: transparent !important; border: none !important;">
                <div class="modal-header" style="border: none; padding: 1rem 1rem 0;">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                title="Company Video"
                                allowfullscreen
                                style="border-radius: 8px;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes pulse {
    0% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }
    100% {
        transform: translate(-50%, -50%) scale(2);
        opacity: 0;
    }
}

.play-button:hover {
    transform: scale(1.1) !important;
    box-shadow: 0 12px 35px rgba(40,167,69,0.6) !important;
    background: #218838 !important;
}

.play-button:active {
    transform: scale(0.95) !important;
}

/* Parallax effect */
.video-hero {
    background-attachment: fixed !important;
}

@media (max-width: 768px) {
    .video-hero {
        background-attachment: scroll !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simple parallax effect
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const videoSection = document.querySelector('.video-hero');
        if (videoSection && window.innerWidth > 768) {
            const speed = scrolled * 0.5;
            videoSection.style.backgroundPosition = `center ${speed}px`;
        }
    });
});
</script>
