function funcSeen1() {
    alert("This Morning is a British daytime magazine programme that is broadcast on ITV. It debuted on 3 October 1988 and is broadcast live every weekday from 10:00 am to 12:30 pm across the United Kingdom and Ireland. The programme features a variety of news, as well as show business, fashion, beauty, lifestyle, home and garden, food, tech, live phone-ins, and competitions. (Wikipedia)");
}
function funcSeen2() {
    alert("Steph's Packed Lunch (formerly aired as The Steph Show) is a daytime television programme in the UK that is broadcast on Channel 4 each weekday afternoon. The show is presented by English journalist and broadcaster Steph McGovern. The show is live and features items including showbiz interviews, food, news, and consumer advice. It is broadcast from Leeds Dock. (Wikipedia)");
}
function funcSeen3() {
    alert("Sunday Brunch is a British television programme presented by Tim Lovejoy and Simon Rimmer. It is broadcast live on Channel 4 on Sunday mornings and features cookery and interviews with celebrity guests. (Wikpedia)");
}
function funcSeen4() {
    alert("Saturday Kitchen Live is a British cookery programme, that is broadcast live on BBC One every Saturday between 10.00am and 11.30am produced by Cactus TV. (Wikipedia)");
}

// form validationnya sebetulnya tak perlu js
// karena hanya memanfaatkan "required" saja, tidak ada keperluan spesifik
// tetapi ini untuk keperluan penilaian saya buatkan cek karakter pesan

function validateForm() {
    let x = document.forms["formAlfa"]["messageNya"].value;
    if (x.length < 20) {
        alert("Message must at least contain 20 characters.");
        return false;
    }
}
