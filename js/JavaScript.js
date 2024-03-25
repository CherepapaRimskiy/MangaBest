let page=document.querySelector('#manga-page-read');
let count_page = 1;
let count_chapter = 0;
let page_number = "001";
let chapter_number = "000";

function vpered() {
    ++count_page;
    
    if (count_page < 10) {
        page_number = "00" + count_page;
    }
    else {
        page_number = "0" + count_page;
    }

    if (count_page > 14) {
        count_page = 1;
        page_number = "001";
        ++count_chapter;
        chapter_number = "00" + count_chapter;
    }
    
    if (count_chapter > 1) {
        window.document.location = "Solo Leveling.html";
    }

    page.src = `../manga-read/manga-page-read/${chapter_number}-${page_number}.jpg`;
    window.document.location = "#nach";
}
function nazad() {

}
    
