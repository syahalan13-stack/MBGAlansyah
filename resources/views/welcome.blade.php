<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Badan Gizi Nasional Republik Indonesia</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
    scroll-behavior:smooth;
}

body{
    background:#f5f7fa;
    color:#222;
}

/* Navbar */

nav{
    width:100%;
    position:fixed;
    top:0;
    left:0;
    background:#ffffff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 8%;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
    z-index:999;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
}

.logo img{
    width:55px;
}

.logo h2{
    color:#0b3c8a;
    font-size:20px;
}

nav ul{
    display:flex;
    list-style:none;
    gap:30px;
}

nav ul li a{
    text-decoration:none;
    color:#333;
    font-weight:600;
    transition:.3s;
}

nav ul li a:hover{
    color:#0b3c8a;
}

/* Hero */

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:120px 8%;
    background:linear-gradient(135deg,#0b3c8a,#2f7de1);
    color:white;
}

.hero-text{
    width:50%;
}

.hero-text h1{
    font-size:55px;
    margin-bottom:20px;
}

.hero-text p{
    font-size:18px;
    line-height:30px;
    margin-bottom:30px;
}

.hero-text button{
    padding:15px 35px;
    border:none;
    border-radius:40px;
    background:#FFD54F;
    color:#333;
    font-size:18px;
    cursor:pointer;
    transition:.3s;
    font-weight:bold;
}

.hero-text button:hover{
    transform:translateY(-5px);
    background:#FFC107;
}

.hero img{
    width:370px;
    animation:float 3s infinite ease-in-out;
}

@keyframes float{
    0%{
        transform:translateY(0px);
    }
    50%{
        transform:translateY(-15px);
    }
    100%{
        transform:translateY(0px);
    }
}

/* About */

section{
    padding:80px 8%;
}

.title{
    text-align:center;
    font-size:38px;
    color:#0b3c8a;
    margin-bottom:50px;
}

.about{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

.card{
    background:white;
    padding:35px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,.1);
    transition:.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card h3{
    color:#0b3c8a;
    margin-bottom:15px;
}

/* Program */

.program{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}

.program-card{
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,.1);
}

.program-card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.program-card .content{
    padding:20px;
}

.program-card h3{
    color:#0b3c8a;
    margin-bottom:10px;
}

/* Statistik */

.stats{
    background:#0b3c8a;
    color:white;
}

.stat-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:30px;
    text-align:center;
}

.number{
    font-size:45px;
    font-weight:bold;
}

/* Footer */

footer{
    background:#092d67;
    color:white;
    text-align:center;
    padding:30px;
}

@media(max-width:900px){

.hero{
    flex-direction:column;
    text-align:center;
}

.hero-text{
    width:100%;
}

.hero img{
    width:250px;
    margin-top:40px;
}

nav ul{
    display:none;
}

.hero-text h1{
    font-size:40px;
}

}

</style>

</head>
<body>

<nav>

<div class="logo">
<img src="https://www.bgn.go.id/logo-bgn.png">
<h2>MAKANAN BERGIZI GRATIS</h2>
</div>

<ul>
<li><a href="#">Beranda</a></li>
<li><a href="#tentang">Tentang</a></li>
<li><a href="#program">Program</a></li>
<li><a href="#statistik">Statistik</a></li>
<li><a href="https://wa.me/6285709292461?text=Halo%20Admin%20MBG,%20saya%20ingin%20bertanya%20mengenai%20Program%20Makan%20Bergizi%20Gratis."
target="_blank">
Kontak
</a></li>
</ul>

</nav>

<section class="hero">

<div class="hero-text">

<h1>Mewujudkan Indonesia Sehat Melalui Gizi Berkualitas</h1>

<p>
Badan Gizi Nasional Republik Indonesia berkomitmen meningkatkan kualitas
gizi masyarakat melalui edukasi, pelayanan, serta berbagai program nasional
guna menciptakan generasi yang sehat, cerdas, dan produktif.
</p>

<button onclick="scrollProgram()">Lihat Program</button>

</div>

<img src="https://www.bgn.go.id/logo-bgn.png">

</section>

<section id="tentang">

<h2 class="title">Tentang Kami</h2>

<div class="about">

<div class="card">
<h3>Visi</h3>
<p>
Mewujudkan masyarakat Indonesia yang sehat, kuat, dan bebas dari masalah gizi.
</p>
</div>

<div class="card">
<h3>Misi</h3>
<p>
Menyelenggarakan program peningkatan gizi masyarakat secara berkelanjutan dan merata.
</p>
</div>

<div class="card">
<h3>Tujuan</h3>
<p>
Mendukung terciptanya generasi emas Indonesia melalui pemenuhan gizi yang optimal.
</p>
</div>

</div>

</section>

<section id="program">

<h2 class="title">Program Unggulan</h2>

<div class="program">

<div class="program-card">
<img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=700">
<div class="content">
<h3>Makan Bergizi Gratis</h3>
<p>Penyediaan makanan bergizi bagi pelajar di seluruh Indonesia.</p>
</div>
</div>

<div class="program-card">
<img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=700">
<div class="content">
<h3>Edukasi Gizi</h3>
<p>Memberikan edukasi kepada masyarakat mengenai pola makan sehat.</p>
</div>
</div>

<div class="program-card">
<img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=700">
<div class="content">
<h3>Pangan Sehat</h3>
<p>Mendorong konsumsi pangan lokal yang bergizi dan seimbang.</p>
</div>
</div>

</div>

</section>

<section class="stats" id="statistik">

<h2 class="title" style="color:white;">Statistik Program</h2>

<div class="stat-grid">

<div>
<div class="number" id="n1">0</div>
<p>Sekolah</p>
</div>

<div>
<div class="number" id="n2">0</div>
<p>Siswa</p>
</div>

<div>
<div class="number" id="n3">0</div>
<p>Daerah</p>
</div>

<div>
<div class="number" id="n4">0</div>
<p>Program</p>
</div>

</div>

</section>

<footer id="kontak">

<h2>Badan Gizi Nasional Republik Indonesia</h2>

<p>
HAK CIPTA Alansyah
</p>

<br>

<p>
© 2026 Badan Gizi Nasional
</p>

</footer>

<script>

function scrollProgram(){
document.getElementById("program").scrollIntoView({
behavior:"smooth"
});
}

function counter(id,target){

let angka=0;

let interval=setInterval(function(){

angka+=Math.ceil(target/100);

if(angka>=target){
angka=target;
clearInterval(interval);
}

document.getElementById(id).innerHTML=angka.toLocaleString();

},20);

}

window.onload=function(){

counter("n1",1250);
counter("n2",98000);
counter("n3",38);
counter("n4",12);

}

</script>

</body>
</html>