<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaporPak!!</title>
</head>
<style>
    /* Styling untuk navbar */
    nav {
      display: flex;
      justify-content: space-between;
      color: white;
      padding: 10px 100px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .container {
        align-items: center;
        display: flex
    }
    .Lapor {
        color:#F4EEE0;
        font-size: 25px;
        font-weight: bolder
    }
    .Pak {
        color: #F4EEE0;
        font-weight: bolder
    }
    /* Styling untuk link pada navbar */
    nav a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-weight: bold;
    }

    /* Styling untuk link active pada navbar */
    nav a.active {
      color: yellow;
    }
    .Profile {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .PProfile {
        width: 40px;
        height: 40px;
        border-radius: 100%;
    }
    .Text {
        margin-top: 60px;
        text-align: center;
        color: white
    }
    .box {
        margin-top: 50px;
        width: 600px;
        background-color: #ffffff;
        padding:10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        margin-left: 350px;
    }
    .Form {
        margin-top: 10px;
        padding: 10px
    }
    .nav-search form {
        position: relative;
    }
    .nav-search input[type="text"] {
        padding: 5px 5px 5px 10px;
        font-size: 12px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
        width: 100px;
        margin-left: 10px;
    }
    .nav-search button[type="submit"] {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        border: none;
        background-color: transparent;
        font-size: 20px;
        color: gray;
    }
    .nav-search button[type="submit"]:hover {
        color: rgb(255, 0, 0);
    }
    footer {
        text-align: center;
        font-size: 14px;
        color: white;
        margin-top: 50px;
    }
  </style>
<body style="background-color: #ff3030">
    <nav>
        <div class="container">
            <div>
                <span class="Lapor">Lapor</span>
                <span class="Pak">Pak!</span>
            </div>
            <div style="margin-left: 30px; display:flex">
              <a href="#" class="active">Home</a>
              <a href="#">Statistik</a>
              <a href="#">Laporan</a>
              <div class="nav-search">
                <form>
                  <input type="text" placeholder="Search...">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div>
        </div>
        <div class="Profile">
            <a href="£">
                <img src="\assets\bell.png" style="margin-right:15px" />
            </a>
            <a href="#">
                <img class="PProfile" src="\assets\Profile_fan.jpeg" />
            </a>
            <a href="#">Muhammad Alfan</a>
        </div>
      </nav>


          <div style="text-align:center">
            <div class="Text">
              <h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
              <p style="font-size: 28px">Sampaikan laporan anda langsung kepada instansi pemerintah berwenang</p>
              <span style="font-size: 30px">________</span>
            </div>

                <div class="box">
                    <div style=" display:flex; flex-direction:column">
                        <span style="font-weight: bold; background-color:#ff3030;; padding:10px; color:white">Sampaikan Laporan Anda</span>
                        <span style="margin-top: 10px">Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar</span>
                    </div>
                    <div>
                        <form style="flex-direction: column; display:flex">
                            <input type="text" placeholder="Ketik Judul Laporan Anda" class="Form">
                            <input type="text" placeholder="Ketik Isi Laporan Anda" class="Form">
                            <input type="text" placeholder="Ketik Lokasi Kejadian" class="Form">
                            <input type="date" placeholder="Pilih Tanggal Kejadian" class="Form">
                            <select id="Category" name="Pilih Kategori Kejadian" class="Form">
                                <option value="Pencurian">Pencurian</option>
                                <option value="Pembacokan">Pembacokan</option>
                                <option value="Perkelahian">Perkelahian</option>
                                <option value="KDRT">KDRT</option>
                                <option value="Penyebar HOAX">Penyebar HOAX</option>
                            </select>
                                <a href="#" style="color:white">
                                    <button type="submit" style="background-color: #ff3030; color:white; font-weight:bold; width: 100px; padding:5px; margin-top:10px; border:none; text-align:center; align-item:center">Kirim Laporan!</button>
                                </a>
                            </form>
                            </div>
                    </div>
                <footer><p>@Copyright <a href="https://www.instagram.com/mhmmdalfn_1502/?hl=id" style="color: white">MhmmdAlfn_1502</a></p></footer>
            </div>
        </div>
        </body>
</html>