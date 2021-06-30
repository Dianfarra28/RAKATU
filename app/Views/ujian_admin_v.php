<?= $this->extend('template_admin'); ?>


    <?= $this->section('content'); ?>
  <!--  section login -->

<script language="JavaScript">
    <!-- Mulai_script_soal
    var ans = new Array;
    var done = new Array;
    var score = 0;
    ans[1] = "d";
    ans[2] = "a";
    ans[3] = "d";
    ans[4] = "c";
    ans[5] = "b";
    ans[6] = "a";
    ans[7] = "a";
    ans[8] = "c";
    ans[9] = "d";
    ans[10] = "c";
    ans[11] = "d";
    ans[12] = "b";
    ans[13] = "d";
    ans[14] = "b";
    ans[15] = "a";
    ans[16] = "d";
    ans[17] = "c";
    ans[18] = "a";
    ans[19] = "a";
    ans[20] = "b";
    ans[21] = "a";
    ans[22] = "c";
    ans[23] = "b";
    ans[24] = "d";
    ans[25] = "a";
    ans[26] = "a";
    ans[27] = "b";
    ans[28] = "c";
    ans[29] = "c";
    ans[30] = "a";
    ans[31] = "a";
    ans[32] = "c";
    ans[33] = "d";
    ans[34] = "b";
    ans[35] = "c";
    ans[36] = "a";
    ans[37] = "a";
    ans[38] = "c";
    ans[39] = "d";
    ans[40] = "c";
    ans[41] = "a";
    ans[42] = "d";
    ans[43] = "b";
    ans[44] = "d";

    function Engine(question, answer) {
        if (answer != ans[question]) {
            if (!done[question]) {
                done[question] = -1;
                alert("Salah!\n\nSkor anda sekarang adalah: " + score);
            } else {
                alert("Anda sudah pernah menjawab soal ini!");
            }
        } else {
            if (!done[question]) {
                done[question] = -1;
                score++;
                alert("Benar!\n\nSkor anda sekarang adalah: " + score);
            } else {
                alert("Anda sudah pernah menjawab soal ini!");
            }
        }
    }


    // Selesai_Script_Soal -->
</script>
<section id="soal">
<h1>
    <center>Tes Sistem Rangka Tulang</center>
</h1><br>
</hr>
<noscript><p class="alert">Javasript tidak mendukung atau tidak aktif di browser anda. Mohon agar mengatifkan javascript anda.</p></noscript>
<div class="container" >
<form>
    <div class="container"><b> 1. Berikut ini yang merupakan jaringan ikat adalah... </b><br />
        <input onclick="Engine(1, this.value)" type="radio" value="a" /> A. tulang rawan, tulang keras, dan otot lurik.<br />
        <input onclick="Engine(1, this.value)" type="radio" value="b" /> B. tulang rawan, otot jantung, dan darah.<br />
        <input onclick="Engine(1, this.value)" type="radio" value="c" /> C. tulang keras, otot polos, dan darah.<br />
        <input onclick="Engine(1, this.value)" type="radio" value="d" /> D. tulang rawan, lemak, dan darah.<br /><br>

        <b>2. Berikut beberapa jaringan ikat penyusun tubuh manusia: </b><br />
        <b>(1) kolagen</b><br>
        <b>(2) tulang rawan</b><br>
        <b>(3) serabut elastin</b><br>
        <b>(4) serabut retikular</b><br>
        <b>(5) jaringan adiposa</b><br>
        <b>Jaringan ikat padat yang berfungsi sebagai jaringan penyokong adalah.. </b><br>
        <input onclick="Engine(2, this.value)" type="radio" value="a" /> A. 1 dan 4.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="b" /> B. 2 dan 5.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="c" /> C. 1 dan 5.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="d" /> D. 3 dan 4.<br /><br>

        <b>3. Dari pasangan fungsi sistem pada hewan, yang memiliki hubungan paling erat adalah.. </b><br />
        <input onclick="Engine(2, this.value)" type="radio" value="a" /> A. integumen dan skeletal.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="b" /> B. integumen dan digestivus.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="c" /> C. muscular dan epitel.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="d" /> D. skeletal dan. muscular.<br /><br>

        <b>4. Pada penampang lintang tibia (tulang kering) manusia, sumsum merah ditemukan pada bagian? </b><br />
        <input onclick="Engine(4, this.value)" type="radio" value="a" /> A. periosteum.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="b" /> B. endoskeleton.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="c" /> C. epitisis.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="d" /> D. tulang rawan.<br /><br>

        <b>5. Pernyataan yang benar mengenai perendaman tulang dalam HCl adalah... </b><br />
        <input onclick="Engine(5, this.value)" type="radio" value="a" /> A. tulang menjadi keras.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="b" /> B. tulang menjadi lentur.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="c" /> C. matriks tulang tidak larut.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="d" /> D. sumsum tulang menjadi berwarna putih<br /><br>

        <b>6. Persendian antara tulang-tulang yang membentuk tengkorak disebut sendi... </b><br />
        <input onclick="Engine(6, this.value)" type="radio" value="a" /> A. sinflbrosis.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="b" /> B. endartrosis.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="c" /> C. sinkondrosis.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="d" /> D. diartrosis.<br /><br>

        <b>7. Skoliosis merupakan penyakit tulang yang menyerang tulang... </b><br />
        <input onclick="Engine(7, this.value)" type="radio" value="a" /> A. vertebrae thoracalis.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="b" /> B. vertebrae cervicale.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="c" /> C. vertebrae cacrum.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="d" /> D. costae.<br /><br>

        <b>8. Unit kontraktil yang berperan dalam proses kontraksi pada jaringan otot disebut.. </b><br />
        <input onclick="Engine(8, this.value)" type="radio" value="a" /> A. miofilamen<br />
        <input onclick="Engine(8, this.value)" type="radio" value="b" /> B. miosin.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="c" /> C. sarkomer.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="d" /> D. mioflbril.<br /><br>

        <b>9. Pernyataan manakah yang tepat mengenai mekanisme kelja jaringan otot... </b><br />
        <input onclick="Engine(8, this.value)" type="radio" value="a" /> A. Otot lurik bekelja lambat menanggapi rangsang.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="b" /> B. Otot jantung bekelj a cepat menanggapi rangsang.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="c" /> C. Otot serat lintang bersifat involuntary.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="d" /> D. Otot jantung bersifat involunter.<br /><br>

        <b>10. Protein miofibril yang berfungsi mengikat ion kalsium (Ca) dalam mekanisme kontraksi otot rangka adalah... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. aktin.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. miosin.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. troponin.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. ion Natrium.<br /><br>

        <b>11. Secara umum, mekanisme kontraksi otot dapat dijabarkan sebagai berikut, kecuali... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. asetikolin bekerja pada membran saraf otot.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. ujung saraf mensekresikan neurotransmitter.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. potensial berj alan sepanjang saraf motorik sampai ke ujung saraf.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. potensial berjalan sepanjang saraf sensori sampai ke ujung saraf.<br /><br>

        <b>12. Setelah aktivitas olahraga berat, dalam sel otot akan terjadi peningkatan kandungan senyawa berikut ini, kecuali... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. fosfat anorganik.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. glukosa.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. adenosin difosfat.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. laktat.<br /><br>

        <b>13. Seseorang mengalami penurunan massa otot akibat tidak digunakan dalam jangka waktu lama. Istilah yang tepat untuk kelainan kondisi otot tersebut adalah.... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. hiperplasia.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. hipotrofl.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. hipertrofi.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. atrofi.<br /><br>

        <b>14. Tulang-tulang yang ada pada manusia tersusun secara teratur dan membentuk ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Sendi.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Rangka.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Otot.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Sel.<br /><br>

        <b>15. Salah satu jenis sendi yang dapat digerakkan ke samping dan ke depan dinamakan sendi ... </b><br />
        <input onclick="Engine(2, this.value)" type="radio" value="a" /> A. Pelana.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="b" /> B. Geser.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="c" /> C. Peluru.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="d" /> D. Engsel.<br /><br>

        <b>16. Kerusakan yang terjadi pada sumsum tulang belakang dapat mengakibatkan terjadinya ... </b><br />
        <input onclick="Engine(4, this.value)" type="radio" value="a" /> A. Mata menjadi buta.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="b" /> B. Sobeknya paru-paru.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="c" /> C. Kejang-kejang.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="d" /> D. Lumpuh.<br /><br>

        <b>17. Tulang-tulang penyusun rangka kepala terdiri dari tulang keras, karena berfungsi untuk melindungi ... </b><br />
        <input onclick="Engine(5, this.value)" type="radio" value="a" /> A. Hati.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="b" /> B. Paru-paru.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="c" /> C. Otak.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="d" /> D. Lambung.<br /><br>

        <b>18. Punggung dapat digerakkan ke muka dan ke belakang karena memiliki ... </b><br />
        <input onclick="Engine(6, this.value)" type="radio" value="a" /> A. Ruas-ruas tulang belakang.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="b" /> B. Tulang-tulang rusuk.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="c" /> C. Tulang dada.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="d" /> D. Tulang paha.<br /><br>

        <b>19. Bagian tubuhmu yang bergerak karena adanya sendi engsel adalah ... </b><br />
        <input onclick="Engine(7, this.value)" type="radio" value="a" /> A. Lengan.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="b" /> B. Lutut.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="c" /> C. Betis.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="d" /> D. Leher.<br /><br>

        <b>20. Yang berfungsi untuk melindungi alat pendernaan dan alat reproduksi bagian dalam yaitu ... </b><br />
        <input onclick="Engine(8, this.value)" type="radio" value="a" /> A. Tulang belakang<br />
        <input onclick="Engine(8, this.value)" type="radio" value="b" /> B. Tulang pinggul.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="c" /> C. Ruas tulang.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="d" /> D. Rangka Kepala.<br /><br>

        <b>21. Ruas tulang leher berfungsi untuk melindungi ... </b><br />
        <input onclick="Engine(8, this.value)" type="radio" value="a" /> A. Tenggorokan dan kerongkongan.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="b" /> B. Otak, mata, dan telinga.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="c" /> C. Alat pencernaan.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="d" /> D. Sumsum tulang belakang.<br /><br>

        <b>22. Penyakit yang mengakibatkan tulang mudah retak atau patah dinamakan ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Asam urat.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. TBC tulang.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Osteoporosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Rematik.<br /><br>

        <b>23. Beban yang terlalu berat di salah satu lengan dapat membuat tulang punggung menderita ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Skoliosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Porosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Lordosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Kifosis.<br /><br>

        <b>24. Tulang kaki yang membengkak karena kekurangan vitamin ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. A.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. B.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. C.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. D.<br /><br>

        <b>25. Hubungan antara tulang-tulang pergelangan tangan dan kaki merupakan .... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Sendi kaku.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Sendi mati.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Sendi gerak.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Otot.<br /><br>

        <b>26. Tulang yang kekurangan zat kapur akan mengakibatkan tulang ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Lordosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Kifosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Rapuh.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Skoliosis.<br /><br>

        <b>27. Berikut ini yang bukan merupakan fungsi rangka adalah ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Membentuk tubuh.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Membentuk daging.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Tempat melekatnya otot.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Menegakkan tubuh.<br /><br>

        <b>28. Setiap persendian kita dapat digerakkan dengan bantuan ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Kulit.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Daging.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Otot.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Perasaan.<br /><br>

        <b>29. Berdasarkan bentuknya, tulang dibedakan menjadi 3 yaitu ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Tulang kepala, tulang tubuh, dan tulang anggota gerak.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Tulang tengkorak, tulang belakang, dan tulang anggota gerak.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Tulang pipa, tulang pipih, dan tulang pendek.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Tulang poros, tulang anggota gerak atas, dan tulang anggota gerak bawah.<br /><br>

        <b>30. Fungsi rangka bagi tubuh kita antara lain …. </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Memberi bentuk tubuh.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Tempat peredaran darah.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Membentuk otot.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Tempat melekatnya organ dalam.<br /><br>

        <b>31. Contoh organ tubuh yang tersusun dari tulang rawan adalah ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Hidung dan daun telinga.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Mulut dan hidung.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Pipi dan mulut.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Daun telinga dan pipi.<br /><br>

        <b>32. Berikut ini yang bukan merupakan tulang anggota badan, yaitu ... </b><br />
        <input onclick="Engine(2, this.value)" type="radio" value="a" /> A. Tulang belakang.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="b" /> B. Tulang dada.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="c" /> C. Tulang lengan.<br />
        <input onclick="Engine(2, this.value)" type="radio" value="d" /> D. Tulang rusuk.<br /><br>

        <b>33. Tulang tengkorak merupakan tulang yang memiliki bentuk ... </b><br />
        <input onclick="Engine(4, this.value)" type="radio" value="a" /> A. Tulang yang bentuknya tidak beraturan.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="b" /> B. Tulang pipa.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="c" /> C. Tulang pendek.<br />
        <input onclick="Engine(4, this.value)" type="radio" value="d" /> D. Tulang pipih.<br /><br>

        <b>34. Menurut bahan penyusunnya, tulang digolongkan menjadi ... </b><br />
        <input onclick="Engine(5, this.value)" type="radio" value="a" /> A. Tulang pipa dan tulang pipih.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="b" /> B. Tulang rawan dan tulang keras.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="c" /> C. Tulang tengkorak dan tulang badan.<br />
        <input onclick="Engine(5, this.value)" type="radio" value="d" /> D. Tulang keras dan tulang pendek.<br /><br>

        <b>35. Menurut bentuknya ruas tulang belakang termasuk tulang ... </b><br />
        <input onclick="Engine(6, this.value)" type="radio" value="a" /> A. Pipa.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="b" /> B. Pipih.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="c" /> C. Pendek.<br />
        <input onclick="Engine(6, this.value)" type="radio" value="d" /> D. Sejati.<br /><br>

        <b>36. Bagian tengah tulang pipa berisi ... </b><br />
        <input onclick="Engine(7, this.value)" type="radio" value="a" /> A. Sumsum kuning dan lemak.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="b" /> B. Sumsum kuning.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="c" /> C. Lemak.<br />
        <input onclick="Engine(7, this.value)" type="radio" value="d" /> D. Sumsum merah dan lemak.<br /><br>

        <b>37. Berikut ini fungsi rangka manusia, kecuali ... </b><br />
        <input onclick="Engine(8, this.value)" type="radio" value="a" /> A. Alat gerak aktif.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="b" /> B. Tempat melekatnya otot.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="c" /> C. Penegak tubuh.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="d" /> D. Pemberi bentuk tubuh.<br /><br>

        <b>38. Tulang yang zat perekatnya lebih banyak dari pada zat kaputnya terdapat pada ... </b><br />
        <input onclick="Engine(8, this.value)" type="radio" value="a" /> A. Mata kaki.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="b" /> B. Tempurung lutut.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="c" /> C. Daun telinga.<br />
        <input onclick="Engine(8, this.value)" type="radio" value="d" /> D. Tulang hasta.<br /><br>

        <b>39. Kelainan pada tulang berikut yang disebabkan karena gangguan mekanik adalah ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Artritis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Kifosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Rakitis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Fraktura.<br /><br>

        <b>40. Rangka dikatakan sebagai alat gerak pasif karena ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Hanya bergerak ketika mendapat perintah otot.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Membutuhkan energi yang besar untuk pergerakannya.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Gerakannya dipengaruhi oleh kontraksi otot.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Pergerakannya dipengaruhi oleh bentuk sendi.<br /><br>

        <b>41. Gangguan tulang belakang biasanya disebabkan oleh sikap duduk dan berdiri sering membungkuk, yaitu ... </b><br />
        <img src="/assets/img/soal/1.jpg" style="width:310px;height:150px;"><br>
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. A.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. B.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. C.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. D.<br /><br>

        <b>42. Perhatikan contoh bentuk tulang berikut ini! </b><br />
        <img src="/assets/img/soal/2.jpg" style="width:310px;height:150px;"><br>
        <b>Bentuk tulang yang menyusun rangka kepala adalah ... </b><br />
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. 1,2.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. 2,3.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. 3,4.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. 2,4.<br /><br>

        <b>43. Perhatikan gambar rangka badan di samping kiri. Bagian yang merupakan tulang rusuk ditunjukkan oleh nomor ... </b><br />
        <img src="/assets/img/soal/3.jpg" style="width:200px;height:350px;"><br>
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. 1.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. 2.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. 3.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. 4.<br /><br>

        <b>44. Gangguan yang terjadi pada tulang gambar di bawah merupakan akibat kebiasaan duduk yang salah. Kelainan tulang tersebut disebut ... </b><br />
        <img src="/assets/img/soal/4.jpg" style="width:200px;height:350px;"><br>
        <input onclick="Engine(10, this.value)" type="radio" value="a" /> A. Kifosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="b" /> B. Skoliosis.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="c" /> C. Fraktura.<br />
        <input onclick="Engine(10, this.value)" type="radio" value="d" /> D. Lordosis.<br /><br>

    </div>

    <br />
    <br />
    <center>

    <a href="/Dashboard/menuadmin'>
    <input onclick="NextLevel()" type="button" class="btn" value="Selesai" /></a><br><br>

    </center>

</form>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


 <?= $this->endSection(); ?>