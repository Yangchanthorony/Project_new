<script>
    function toggleLanguage(lang) {
    const translations = {
       
    };

    for (const id in translations) {
        const element = document.getElementById(id);
        if (element) {
            element.innerHTML = translations[id][lang];
        }
    }

    const enButton = document.getElementById('en');
    const khButton = document.getElementById('kh');
    if (enButton) enButton.style.display = lang === 'kh' ? 'none' : 'inline';
    if (khButton) khButton.style.display = lang === 'kh' ? 'inline' : 'none';
}
</script>