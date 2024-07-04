document.addEventListener('DOMContentLoaded', function() {
    const moreDetailsBtn = document.getElementById('moreDetailsBtn');
    const detailsSection = document.getElementById('detailsSection');

    moreDetailsBtn.addEventListener('click', function() {
        if (detailsSection.classList.contains('hidden')) {
            detailsSection.classList.remove('hidden');
            moreDetailsBtn.textContent = 'Lebih Sedikit';
        } else {
            detailsSection.classList.add('hidden');
            moreDetailsBtn.textContent = 'Lebih Lanjut';
        }
    });
});
