
<script>
// Toggle chat popup visibility
function toggleChatPopup() {
    const chatPopup = document.getElementById('chat-popup');
    chatPopup.style.display = (chatPopup.style.display === 'block') ? 'none' : 'block';
}

// Send WhatsApp message
function sendMessage() {
    const userMessage = document.getElementById('userMessage').value;
    if (userMessage.trim() !== '') {
        const encodedMessage = encodeURIComponent(userMessage);
        const whatsappLink = `https://wa.me/your-phone-number?text=${encodedMessage}`;
        window.open(whatsappLink, '_blank');
    }
}
</script>

<script>
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', function () {
            const icon = this.querySelector('.toggle-icon');
            if (this.classList.contains('collapsed')) {
                icon.textContent = '+'; // Show plus icon when collapsed
            } else {
                icon.textContent = '-'; // Show minus icon when expanded
            }
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('.slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false, 
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false, 
            infinite: true, 
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        // Custom navigation buttons
        $('.prev-btn').click(function() {
            $('.slider').slick('slickPrev');
        });
        $('.next-btn').click(function() {
            $('.slider').slick('slickNext');
        });
    });
</script>
<script>
    let currentProfileSet = 0;
    let intervalId;

    function changeProfiles() {
        const profiles = document.querySelectorAll('.profile');
        const totalProfiles = profiles.length;
        const profilesToShow = 3;

        profiles.forEach(profile => profile.style.display = 'none');

        for (let i = 0; i < profilesToShow; i++) {
            profiles[(currentProfileSet * profilesToShow + i) % totalProfiles].style.display = 'block';
        }
        currentProfileSet = (currentProfileSet + 1) % Math.ceil(totalProfiles / profilesToShow);
    }
    function startAutoChange() {
        changeProfiles(); 
        intervalId = setInterval(changeProfiles, 3000); 
    }
    startAutoChange();
</script>


<script>
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active'); // Toggle the active class
            setTimeout(() => {
                if (item.classList.contains('active')) {
                    item.classList.remove('active'); // Remove the active class after a brief moment
                }
            }, 3000); // Adjust this duration as necessary
        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>