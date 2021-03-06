
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cek Ongkir JNE, TIKI dan Pos Indonesia Menggunakan API RajaOngkir">
    <meta name="author" content="Didin Studio">
    <title>Cek Ongkir JNE, TIKI dan Pos Indonesia Menggunakan API RajaOngkir</title>
    <link rel="icon" href="https://ui.didinstudio.com/img/Icon.png" sizes="16x16" type="image/png">
     
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <header>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <h1><a href="https://www.didinstudio.com/">Didin<span class="color">Studio</span></a></h1>
                    <div class="hidden-phone hmeta">Studio Perangkat Lunak</div>
                </div>
            </div>
            <div class="col-md-8">
                <div style="margin-top:10px;">
                <p align="center">    
                <a href="http://bit.ly/didinstudio" role="button" class="btn btn-success">
                    <span class="fa fa-envelope"></span> Contact Programmer
                </a>
                </p>
                </div>
            </div>
        </div>
    </div>
    </header>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        
        <div class="col-md-4">
          <div class="card my-4">
            <h5 class="card-header">CEK ONGKOS KIRIM</h5>
            <div class="card-body">
<label>Kota/Kabupaten Asal</label><br><select name='asal' id='asal' class='custom-select'><option>Pilih Kota Asal</option><option value='1'>Aceh Barat</option><option value='2'>Aceh Barat Daya</option><option value='3'>Aceh Besar</option><option value='4'>Aceh Jaya</option><option value='5'>Aceh Selatan</option><option value='6'>Aceh Singkil</option><option value='7'>Aceh Tamiang</option><option value='8'>Aceh Tengah</option><option value='9'>Aceh Tenggara</option><option value='10'>Aceh Timur</option><option value='11'>Aceh Utara</option><option value='12'>Agam</option><option value='13'>Alor</option><option value='14'>Ambon</option><option value='15'>Asahan</option><option value='16'>Asmat</option><option value='17'>Badung</option><option value='18'>Balangan</option><option value='19'>Balikpapan</option><option value='20'>Banda Aceh</option><option value='21'>Bandar Lampung</option><option value='22'>Bandung</option><option value='23'>Bandung</option><option value='24'>Bandung Barat</option><option value='25'>Banggai</option><option value='26'>Banggai Kepulauan</option><option value='27'>Bangka</option><option value='28'>Bangka Barat</option><option value='29'>Bangka Selatan</option><option value='30'>Bangka Tengah</option><option value='31'>Bangkalan</option><option value='32'>Bangli</option><option value='33'>Banjar</option><option value='34'>Banjar</option><option value='35'>Banjarbaru</option><option value='36'>Banjarmasin</option><option value='37'>Banjarnegara</option><option value='38'>Bantaeng</option><option value='39'>Bantul</option><option value='40'>Banyuasin</option><option value='41'>Banyumas</option><option value='42'>Banyuwangi</option><option value='43'>Barito Kuala</option><option value='44'>Barito Selatan</option><option value='45'>Barito Timur</option><option value='46'>Barito Utara</option><option value='47'>Barru</option><option value='48'>Batam</option><option value='49'>Batang</option><option value='50'>Batang Hari</option><option value='51'>Batu</option><option value='52'>Batu Bara</option><option value='53'>Bau-Bau</option><option value='54'>Bekasi</option><option value='55'>Bekasi</option><option value='56'>Belitung</option><option value='57'>Belitung Timur</option><option value='58'>Belu</option><option value='59'>Bener Meriah</option><option value='60'>Bengkalis</option><option value='61'>Bengkayang</option><option value='62'>Bengkulu</option><option value='63'>Bengkulu Selatan</option><option value='64'>Bengkulu Tengah</option><option value='65'>Bengkulu Utara</option><option value='66'>Berau</option><option value='67'>Biak Numfor</option><option value='68'>Bima</option><option value='69'>Bima</option><option value='70'>Binjai</option><option value='71'>Bintan</option><option value='72'>Bireuen</option><option value='73'>Bitung</option><option value='74'>Blitar</option><option value='75'>Blitar</option><option value='76'>Blora</option><option value='77'>Boalemo</option><option value='78'>Bogor</option><option value='79'>Bogor</option><option value='80'>Bojonegoro</option><option value='81'>Bolaang Mongondow (Bolmong)</option><option value='82'>Bolaang Mongondow Selatan</option><option value='83'>Bolaang Mongondow Timur</option><option value='84'>Bolaang Mongondow Utara</option><option value='85'>Bombana</option><option value='86'>Bondowoso</option><option value='87'>Bone</option><option value='88'>Bone Bolango</option><option value='89'>Bontang</option><option value='90'>Boven Digoel</option><option value='91'>Boyolali</option><option value='92'>Brebes</option><option value='93'>Bukittinggi</option><option value='94'>Buleleng</option><option value='95'>Bulukumba</option><option value='96'>Bulungan (Bulongan)</option><option value='97'>Bungo</option><option value='98'>Buol</option><option value='99'>Buru</option><option value='100'>Buru Selatan</option><option value='101'>Buton</option><option value='102'>Buton Utara</option><option value='103'>Ciamis</option><option value='104'>Cianjur</option><option value='105'>Cilacap</option><option value='106'>Cilegon</option><option value='107'>Cimahi</option><option value='108'>Cirebon</option><option value='109'>Cirebon</option><option value='110'>Dairi</option><option value='111'>Deiyai (Deliyai)</option><option value='112'>Deli Serdang</option><option value='113'>Demak</option><option value='114'>Denpasar</option><option value='115'>Depok</option><option value='116'>Dharmasraya</option><option value='117'>Dogiyai</option><option value='118'>Dompu</option><option value='119'>Donggala</option><option value='120'>Dumai</option><option value='121'>Empat Lawang</option><option value='122'>Ende</option><option value='123'>Enrekang</option><option value='124'>Fakfak</option><option value='125'>Flores Timur</option><option value='126'>Garut</option><option value='127'>Gayo Lues</option><option value='128'>Gianyar</option><option value='129'>Gorontalo</option><option value='130'>Gorontalo</option><option value='131'>Gorontalo Utara</option><option value='132'>Gowa</option><option value='133'>Gresik</option><option value='134'>Grobogan</option><option value='135'>Gunung Kidul</option><option value='136'>Gunung Mas</option><option value='137'>Gunungsitoli</option><option value='138'>Halmahera Barat</option><option value='139'>Halmahera Selatan</option><option value='140'>Halmahera Tengah</option><option value='141'>Halmahera Timur</option><option value='142'>Halmahera Utara</option><option value='143'>Hulu Sungai Selatan</option><option value='144'>Hulu Sungai Tengah</option><option value='145'>Hulu Sungai Utara</option><option value='146'>Humbang Hasundutan</option><option value='147'>Indragiri Hilir</option><option value='148'>Indragiri Hulu</option><option value='149'>Indramayu</option><option value='150'>Intan Jaya</option><option value='151'>Jakarta Barat</option><option value='152'>Jakarta Pusat</option><option value='153'>Jakarta Selatan</option><option value='154'>Jakarta Timur</option><option value='155'>Jakarta Utara</option><option value='156'>Jambi</option><option value='157'>Jayapura</option><option value='158'>Jayapura</option><option value='159'>Jayawijaya</option><option value='160'>Jember</option><option value='161'>Jembrana</option><option value='162'>Jeneponto</option><option value='163'>Jepara</option><option value='164'>Jombang</option><option value='165'>Kaimana</option><option value='166'>Kampar</option><option value='167'>Kapuas</option><option value='168'>Kapuas Hulu</option><option value='169'>Karanganyar</option><option value='170'>Karangasem</option><option value='171'>Karawang</option><option value='172'>Karimun</option><option value='173'>Karo</option><option value='174'>Katingan</option><option value='175'>Kaur</option><option value='176'>Kayong Utara</option><option value='177'>Kebumen</option><option value='178'>Kediri</option><option value='179'>Kediri</option><option value='180'>Keerom</option><option value='181'>Kendal</option><option value='182'>Kendari</option><option value='183'>Kepahiang</option><option value='184'>Kepulauan Anambas</option><option value='185'>Kepulauan Aru</option><option value='186'>Kepulauan Mentawai</option><option value='187'>Kepulauan Meranti</option><option value='188'>Kepulauan Sangihe</option><option value='189'>Kepulauan Seribu</option><option value='190'>Kepulauan Siau Tagulandang Biaro (Sitaro)</option><option value='191'>Kepulauan Sula</option><option value='192'>Kepulauan Talaud</option><option value='193'>Kepulauan Yapen (Yapen Waropen)</option><option value='194'>Kerinci</option><option value='195'>Ketapang</option><option value='196'>Klaten</option><option value='197'>Klungkung</option><option value='198'>Kolaka</option><option value='199'>Kolaka Utara</option><option value='200'>Konawe</option><option value='201'>Konawe Selatan</option><option value='202'>Konawe Utara</option><option value='203'>Kotabaru</option><option value='204'>Kotamobagu</option><option value='205'>Kotawaringin Barat</option><option value='206'>Kotawaringin Timur</option><option value='207'>Kuantan Singingi</option><option value='208'>Kubu Raya</option><option value='209'>Kudus</option><option value='210'>Kulon Progo</option><option value='211'>Kuningan</option><option value='212'>Kupang</option><option value='213'>Kupang</option><option value='214'>Kutai Barat</option><option value='215'>Kutai Kartanegara</option><option value='216'>Kutai Timur</option><option value='217'>Labuhan Batu</option><option value='218'>Labuhan Batu Selatan</option><option value='219'>Labuhan Batu Utara</option><option value='220'>Lahat</option><option value='221'>Lamandau</option><option value='222'>Lamongan</option><option value='223'>Lampung Barat</option><option value='224'>Lampung Selatan</option><option value='225'>Lampung Tengah</option><option value='226'>Lampung Timur</option><option value='227'>Lampung Utara</option><option value='228'>Landak</option><option value='229'>Langkat</option><option value='230'>Langsa</option><option value='231'>Lanny Jaya</option><option value='232'>Lebak</option><option value='233'>Lebong</option><option value='234'>Lembata</option><option value='235'>Lhokseumawe</option><option value='236'>Lima Puluh Koto/Kota</option><option value='237'>Lingga</option><option value='238'>Lombok Barat</option><option value='239'>Lombok Tengah</option><option value='240'>Lombok Timur</option><option value='241'>Lombok Utara</option><option value='242'>Lubuk Linggau</option><option value='243'>Lumajang</option><option value='244'>Luwu</option><option value='245'>Luwu Timur</option><option value='246'>Luwu Utara</option><option value='247'>Madiun</option><option value='248'>Madiun</option><option value='249'>Magelang</option><option value='250'>Magelang</option><option value='251'>Magetan</option><option value='252'>Majalengka</option><option value='253'>Majene</option><option value='254'>Makassar</option><option value='255'>Malang</option><option value='256'>Malang</option><option value='257'>Malinau</option><option value='258'>Maluku Barat Daya</option><option value='259'>Maluku Tengah</option><option value='260'>Maluku Tenggara</option><option value='261'>Maluku Tenggara Barat</option><option value='262'>Mamasa</option><option value='263'>Mamberamo Raya</option><option value='264'>Mamberamo Tengah</option><option value='265'>Mamuju</option><option value='266'>Mamuju Utara</option><option value='267'>Manado</option><option value='268'>Mandailing Natal</option><option value='269'>Manggarai</option><option value='270'>Manggarai Barat</option><option value='271'>Manggarai Timur</option><option value='272'>Manokwari</option><option value='273'>Manokwari Selatan</option><option value='274'>Mappi</option><option value='275'>Maros</option><option value='276'>Mataram</option><option value='277'>Maybrat</option><option value='278'>Medan</option><option value='279'>Melawi</option><option value='280'>Merangin</option><option value='281'>Merauke</option><option value='282'>Mesuji</option><option value='283'>Metro</option><option value='284'>Mimika</option><option value='285'>Minahasa</option><option value='286'>Minahasa Selatan</option><option value='287'>Minahasa Tenggara</option><option value='288'>Minahasa Utara</option><option value='289'>Mojokerto</option><option value='290'>Mojokerto</option><option value='291'>Morowali</option><option value='292'>Muara Enim</option><option value='293'>Muaro Jambi</option><option value='294'>Muko Muko</option><option value='295'>Muna</option><option value='296'>Murung Raya</option><option value='297'>Musi Banyuasin</option><option value='298'>Musi Rawas</option><option value='299'>Nabire</option><option value='300'>Nagan Raya</option><option value='301'>Nagekeo</option><option value='302'>Natuna</option><option value='303'>Nduga</option><option value='304'>Ngada</option><option value='305'>Nganjuk</option><option value='306'>Ngawi</option><option value='307'>Nias</option><option value='308'>Nias Barat</option><option value='309'>Nias Selatan</option><option value='310'>Nias Utara</option><option value='311'>Nunukan</option><option value='312'>Ogan Ilir</option><option value='313'>Ogan Komering Ilir</option><option value='314'>Ogan Komering Ulu</option><option value='315'>Ogan Komering Ulu Selatan</option><option value='316'>Ogan Komering Ulu Timur</option><option value='317'>Pacitan</option><option value='318'>Padang</option><option value='319'>Padang Lawas</option><option value='320'>Padang Lawas Utara</option><option value='321'>Padang Panjang</option><option value='322'>Padang Pariaman</option><option value='323'>Padang Sidempuan</option><option value='324'>Pagar Alam</option><option value='325'>Pakpak Bharat</option><option value='326'>Palangka Raya</option><option value='327'>Palembang</option><option value='328'>Palopo</option><option value='329'>Palu</option><option value='330'>Pamekasan</option><option value='331'>Pandeglang</option><option value='332'>Pangandaran</option><option value='333'>Pangkajene Kepulauan</option><option value='334'>Pangkal Pinang</option><option value='335'>Paniai</option><option value='336'>Parepare</option><option value='337'>Pariaman</option><option value='338'>Parigi Moutong</option><option value='339'>Pasaman</option><option value='340'>Pasaman Barat</option><option value='341'>Paser</option><option value='342'>Pasuruan</option><option value='343'>Pasuruan</option><option value='344'>Pati</option><option value='345'>Payakumbuh</option><option value='346'>Pegunungan Arfak</option><option value='347'>Pegunungan Bintang</option><option value='348'>Pekalongan</option><option value='349'>Pekalongan</option><option value='350'>Pekanbaru</option><option value='351'>Pelalawan</option><option value='352'>Pemalang</option><option value='353'>Pematang Siantar</option><option value='354'>Penajam Paser Utara</option><option value='355'>Pesawaran</option><option value='356'>Pesisir Barat</option><option value='357'>Pesisir Selatan</option><option value='358'>Pidie</option><option value='359'>Pidie Jaya</option><option value='360'>Pinrang</option><option value='361'>Pohuwato</option><option value='362'>Polewali Mandar</option><option value='363'>Ponorogo</option><option value='364'>Pontianak</option><option value='365'>Pontianak</option><option value='366'>Poso</option><option value='367'>Prabumulih</option><option value='368'>Pringsewu</option><option value='369'>Probolinggo</option><option value='370'>Probolinggo</option><option value='371'>Pulang Pisau</option><option value='372'>Pulau Morotai</option><option value='373'>Puncak</option><option value='374'>Puncak Jaya</option><option value='375'>Purbalingga</option><option value='376'>Purwakarta</option><option value='377'>Purworejo</option><option value='378'>Raja Ampat</option><option value='379'>Rejang Lebong</option><option value='380'>Rembang</option><option value='381'>Rokan Hilir</option><option value='382'>Rokan Hulu</option><option value='383'>Rote Ndao</option><option value='384'>Sabang</option><option value='385'>Sabu Raijua</option><option value='386'>Salatiga</option><option value='387'>Samarinda</option><option value='388'>Sambas</option><option value='389'>Samosir</option><option value='390'>Sampang</option><option value='391'>Sanggau</option><option value='392'>Sarmi</option><option value='393'>Sarolangun</option><option value='394'>Sawah Lunto</option><option value='395'>Sekadau</option><option value='396'>Selayar (Kepulauan Selayar)</option><option value='397'>Seluma</option><option value='398'>Semarang</option><option value='399'>Semarang</option><option value='400'>Seram Bagian Barat</option><option value='401'>Seram Bagian Timur</option><option value='402'>Serang</option><option value='403'>Serang</option><option value='404'>Serdang Bedagai</option><option value='405'>Seruyan</option><option value='406'>Siak</option><option value='407'>Sibolga</option><option value='408'>Sidenreng Rappang/Rapang</option><option value='409'>Sidoarjo</option><option value='410'>Sigi</option><option value='411'>Sijunjung (Sawah Lunto Sijunjung)</option><option value='412'>Sikka</option><option value='413'>Simalungun</option><option value='414'>Simeulue</option><option value='415'>Singkawang</option><option value='416'>Sinjai</option><option value='417'>Sintang</option><option value='418'>Situbondo</option><option value='419'>Sleman</option><option value='420'>Solok</option><option value='421'>Solok</option><option value='422'>Solok Selatan</option><option value='423'>Soppeng</option><option value='424'>Sorong</option><option value='425'>Sorong</option><option value='426'>Sorong Selatan</option><option value='427'>Sragen</option><option value='428'>Subang</option><option value='429'>Subulussalam</option><option value='430'>Sukabumi</option><option value='431'>Sukabumi</option><option value='432'>Sukamara</option><option value='433'>Sukoharjo</option><option value='434'>Sumba Barat</option><option value='435'>Sumba Barat Daya</option><option value='436'>Sumba Tengah</option><option value='437'>Sumba Timur</option><option value='438'>Sumbawa</option><option value='439'>Sumbawa Barat</option><option value='440'>Sumedang</option><option value='441'>Sumenep</option><option value='442'>Sungaipenuh</option><option value='443'>Supiori</option><option value='444'>Surabaya</option><option value='445'>Surakarta (Solo)</option><option value='446'>Tabalong</option><option value='447'>Tabanan</option><option value='448'>Takalar</option><option value='449'>Tambrauw</option><option value='450'>Tana Tidung</option><option value='451'>Tana Toraja</option><option value='452'>Tanah Bumbu</option><option value='453'>Tanah Datar</option><option value='454'>Tanah Laut</option><option value='455'>Tangerang</option><option value='456'>Tangerang</option><option value='457'>Tangerang Selatan</option><option value='458'>Tanggamus</option><option value='459'>Tanjung Balai</option><option value='460'>Tanjung Jabung Barat</option><option value='461'>Tanjung Jabung Timur</option><option value='462'>Tanjung Pinang</option><option value='463'>Tapanuli Selatan</option><option value='464'>Tapanuli Tengah</option><option value='465'>Tapanuli Utara</option><option value='466'>Tapin</option><option value='467'>Tarakan</option><option value='468'>Tasikmalaya</option><option value='469'>Tasikmalaya</option><option value='470'>Tebing Tinggi</option><option value='471'>Tebo</option><option value='472'>Tegal</option><option value='473'>Tegal</option><option value='474'>Teluk Bintuni</option><option value='475'>Teluk Wondama</option><option value='476'>Temanggung</option><option value='477'>Ternate</option><option value='478'>Tidore Kepulauan</option><option value='479'>Timor Tengah Selatan</option><option value='480'>Timor Tengah Utara</option><option value='481'>Toba Samosir</option><option value='482'>Tojo Una-Una</option><option value='483'>Toli-Toli</option><option value='484'>Tolikara</option><option value='485'>Tomohon</option><option value='486'>Toraja Utara</option><option value='487'>Trenggalek</option><option value='488'>Tual</option><option value='489'>Tuban</option><option value='490'>Tulang Bawang</option><option value='491'>Tulang Bawang Barat</option><option value='492'>Tulungagung</option><option value='493'>Wajo</option><option value='494'>Wakatobi</option><option value='495'>Waropen</option><option value='496'>Way Kanan</option><option value='497'>Wonogiri</option><option value='498'>Wonosobo</option><option value='499'>Yahukimo</option><option value='500'>Yalimo</option><option value='501'>Yogyakarta</option></select><br><br><label>Provinsi Tujuan</label><br><select name='provinsi' id='provinsi' class='custom-select'><option>Pilih Provinsi Tujuan</option><option value='1'>Bali</option><option value='2'>Bangka Belitung</option><option value='3'>Banten</option><option value='4'>Bengkulu</option><option value='5'>DI Yogyakarta</option><option value='6'>DKI Jakarta</option><option value='7'>Gorontalo</option><option value='8'>Jambi</option><option value='9'>Jawa Barat</option><option value='10'>Jawa Tengah</option><option value='11'>Jawa Timur</option><option value='12'>Kalimantan Barat</option><option value='13'>Kalimantan Selatan</option><option value='14'>Kalimantan Tengah</option><option value='15'>Kalimantan Timur</option><option value='16'>Kalimantan Utara</option><option value='17'>Kepulauan Riau</option><option value='18'>Lampung</option><option value='19'>Maluku</option><option value='20'>Maluku Utara</option><option value='21'>Nanggroe Aceh Darussalam (NAD)</option><option value='22'>Nusa Tenggara Barat (NTB)</option><option value='23'>Nusa Tenggara Timur (NTT)</option><option value='24'>Papua</option><option value='25'>Papua Barat</option><option value='26'>Riau</option><option value='27'>Sulawesi Barat</option><option value='28'>Sulawesi Selatan</option><option value='29'>Sulawesi Tengah</option><option value='30'>Sulawesi Tenggara</option><option value='31'>Sulawesi Utara</option><option value='32'>Sumatera Barat</option><option value='33'>Sumatera Selatan</option><option value='34'>Sumatera Utara</option></select><br>          <label>Kota/Kabupaten Tujuan</label><br>
            <select id="kabupaten" name="kabupaten" class='custom-select'></select><br><br>

            <label>Kurir</label><br>
            <select id="kurir" name="kurir" class='custom-select'>
                <option value="jne">JNE</option>
                <option value="tiki">TIKI</option>
                <option value="pos">POS INDONESIA</option>
            </select><br>

            <label>Berat (Gram)</label><br>
            <input id="berat" type="text" name="berat" value="1000" class="form-control">
            <br>

            <input id="cek" type="submit" value="Cek Ongkir" class="btn btn-success">
            </div>       
          </div>
        </div>
     
        <div class="col-md-8">
          <div class="card my-4">
            <div class="card-body">
                <div id="loading"><img src="image/progreff.gif"></div>
                <p id="kurirname" style="font-weight:700;text-transform:uppercase;color:green;"></p>
                <table id="details" class="table table-bordered table-responsive"></table>
                <table id="ongkos" class="table table-bordered table-responsive"></table>
                <div id="ongkir"></div>
           </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-green">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Cek Ongkos Kirim <i class="fa fa-fw fa-code"></i> Developed by  <a href="http://bit.ly/didinstudio">Didin Studio</a></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/seribu.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#loading").hide();
        $('#provinsi').change(function(){
            //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
            var prov = $('#provinsi').val();

            $.ajax({
                type : 'GET',
                url : 'php/cek_kabupaten.php',
                data :  'prov_id=' + prov,
                    success: function (data) {

                    //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                    $("#kabupaten").html(data);
                }
            });
        });

        $("#cek").click(function(){
            $("#loading").show();
            $("#kurirname").hide();
            $("#details").hide();
            $("#ongkos").hide();
            //Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax 
            var asal = $('#asal').val();
            var kab = $('#kabupaten').val();
            var kurir = $('#kurir').val();
            var berat = $('#berat').val();
            
            $.ajax({
                type : 'POST',
                url : 'php/cek_ongkir.php',
                data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
                    success: function (data) {
                        $("#kurirname").show();
                        $("#details").show();
                        $("#ongkos").show();
                        
                        var obj=$.parseJSON(data);
                        var kurirname=obj['rajaongkir'].results[0].name;
                        $("#kurirname").text(kurirname);
                        
                        var origin=obj['rajaongkir'].origin_details.city_name;
                        var destination=obj['rajaongkir'].destination_details.city_name;
                        var weight=obj['rajaongkir'].query.weight;
                        weight=seribu(weight,",", ".",0);
                        $("#details").html('<thead style="background-color:green;color:white;"><tr><th>Kota/Kabupaten Asal</th><th>Kota/Kabupaten Tujuan</th><th>Berat (Gram)</th></tr></thead><tbody><tr><td>'+origin+'</td><td>'+destination+'</td><td>'+weight+'</td></tr></tbody>');
                        
                        var service=[];
                        var description=[];
                        var ongkos=[];
                        var sampai=[];
                        var kurirkode=obj['rajaongkir'].results[0].code;
                        
                        var n=obj['rajaongkir'].results[0].costs;
                        for(i=0;i<n.length;i++){
                            service[i]=obj['rajaongkir'].results[0].costs[i].service;
                            description[i]=obj['rajaongkir'].results[0].costs[i].description;
                            ongkos[i]=obj['rajaongkir'].results[0].costs[i].cost[0].value;
                            ongkos[i]=seribu(ongkos[i],",", ".",0);
                            
                            sampai[i]=obj['rajaongkir'].results[0].costs[i].cost[0].etd;
                            if(kurirkode!='pos'){
                                sampai[i]=sampai[i]+' HARI';
                            }
                        }

                        if(n.length==1){
                            $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td></tr></tbody>');
                        } else if(n.length==2){
                            $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td></tr></tbody>');
                        } else if(n.length==3){
                            $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td></tr><tr><td style="text-align:left;">'+service[2]+'</td><td>'+description[2]+'</td><td>'+sampai[2]+'</td><td style="text-align:right;">'+ongkos[2]+'</td></tr></tbody>');
                        } else if(n.length==4){
                            $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td></tr><tr><td style="text-align:left;">'+service[2]+'</td><td>'+description[2]+'</td><td>'+sampai[2]+'</td><td style="text-align:right;">'+ongkos[2]+'</td></tr><tr><td style="text-align:left;">'+service[3]+'</td><td>'+description[3]+'</td><td>'+sampai[3]+'</td><td style="text-align:right;">'+ongkos[3]+'</td></tr></tbody>');
                        } else if(n.length==5){
                            $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th></tr></thead><tbody><tr><td style="text-align:left;">'+service[0]+'</td><td>'+description[0]+'</td><td>'+sampai[0]+'</td><td style="text-align:right;">'+ongkos[0]+'</td></tr><tr><td style="text-align:left;">'+service[1]+'</td><td>'+description[1]+'</td><td>'+sampai[1]+'</td><td style="text-align:right;">'+ongkos[1]+'</td></tr><tr><td style="text-align:left;">'+service[2]+'</td><td>'+description[2]+'</td><td>'+sampai[2]+'</td><td style="text-align:right;">'+ongkos[2]+'</td></tr><tr><td style="text-align:left;">'+service[3]+'</td><td>'+description[3]+'</td><td>'+sampai[3]+'</td><td style="text-align:right;">'+ongkos[3]+'</td></tr><tr><td style="text-align:left;">'+service[4]+'</td><td>'+description[4]+'</td><td>'+sampai[4]+'</td><td style="text-align:right;">'+ongkos[4]+'</td></tr></tbody>');
                        } else {
                            $("#ongkos").html('<thead style="background-color:green;color:white;"><tr><th style="text-align:left">Paket</th><th>Deskripsi</th><th>Lama Pengiriman</th><th style="text-align:right;">Ongkir (Rp)</th></tr></thead><tbody><tr><td style="text-align:left;color:red;">KOSONG</td><td style="color:red;">KOSONG</td><td style="color:red;">KOSONG</td><td style="text-align:right;color:red;">KOSONG</td></tr></tbody>');
                        }
                        
                        //$("#ongkir").text(data);
                        $("#loading").hide();
                }
            });
        });
    });
    </script>
    </body>
</html>
