var rubrik = document.getElementById("rubrik");
var info = document.getElementById("info");
var writer = document.getElementById("writer");
var body = document.getElementById("body")

function change(number) {
    switch(number) {
        case '1':
            rubrik.innerHTML = "New York Taxi";
            info.innerHTML = "In New York City, taxicabs come in two varieties: yellow and green; they are widely recognizable symbols of the city. "
            writer.innerHTML = "Info from wikipedia!"
            body.style.backgroundImage = "url('https://hd-wallpaper.wiki/wp-content/uploads/2022/03/new-york-wallpaper-hd-black-and-white.jpg')";
            break;
        
        case '2':
            rubrik.innerHTML = "London Taxi";
            info.innerHTML = "A hackney or hackney carriage (also called a cab, black cab, hack or London taxi) is a carriage or car for hire.";
            writer.innerHTML = "Info from wikipedia!"
            body.style.backgroundImage = "url('https://wallpaperaccess.com/full/180132.jpg')";
            break;
        case '3':
            rubrik.innerHTML = "Tokyo Taxi";
            info.innerHTML = "The Toyota Comfort (Japanese: トヨタ・コンフォート, Hepburn: Toyota Konfōto) and the long-wheelbase Toyota Crown Comfort were a line of mid-size sedans produced by Toyota between 1995 and 2018. "
            writer.innerHTML = "Info from wikipedia!"
            body.style.backgroundImage = "url('https://wallpaperaccess.com/full/19066.jpg')";
            break;
    };
};