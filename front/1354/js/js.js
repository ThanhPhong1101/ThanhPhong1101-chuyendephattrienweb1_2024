document.addEventListener('DOMContentLoaded', function() {
    // Lấy tất cả các tiêu đề accordion
    const toggleTitles = document.querySelectorAll('.vc_toggle_title');

    // Lặp qua từng tiêu đề và thêm sự kiện click
    toggleTitles.forEach(title => {
        title.addEventListener('click', function() {
            // Lấy phần tử cha .vc_toggle
            const toggle = this.parentElement;

            // Toggle class .vc_toggle_active
            toggle.classList.toggle('vc_toggle_active');
        });
    });
});
