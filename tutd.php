 <?php 

// SAYFA GÖRÜNÜŞÜ 

echo "ilk soru ";




 
  $servername = "localhost";
  $username = "root";
  $password = ""; 
  $dbname = "tablo_site";
  
  // veri tabanına bağlantı oluşturma
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("başarısız bağlantı: " . $conn->connect_error);
  }

 
   



  //question1
// veri ekleme post kontrolü
  if(isset($_POST['q1'])){
   // echo"post var";
  $q1=$_POST["q1"];
  
  $ekle1 = "INSERT INTO  deneme(q1)
  VALUES ( '$q1')";
  
  if ($conn->query($ekle1) === TRUE) {
    echo "FİKİR SORGUSU<BR> <br><br><br><br><br> :";
        // question 1 için verileri çek 
        // YES İÇİN  SATIR SAYISINI BUL 
          $sorgu1_y = "SELECT q1 FROM deneme WHERE q1='yes'";
          $q1_yes=$conn->query($sorgu1_y);
          if($q1_yes->num_rows>0){
          $q1_yes_satir=mysqli_num_rows($q1_yes);// cevabı yes olan satır sayısını bize verir 
           echo"$q1_yes_satir";
          }
          
          // NO İÇİN SATIR SAYISINI BUL 
          $sorgu1_n = "SELECT q1 FROM deneme WHERE q1='no'";
          $q1_no=$conn->query($sorgu1_n);
          if($q1_no->num_rows>0){
          $q1_no_satir=mysqli_num_rows($q1_no);
           echo"$q1_no_satir";
          }

        // other  İÇİN SATIR SAYISINI BUL 
         $sorgu1_o = "SELECT q1 FROM deneme WHERE q1='other'";
        $q1_other=$conn->query($sorgu1_o);
        if($q1_other->num_rows>0){
        $q1_other_satir=mysqli_num_rows($q1_other);
         echo"$q1_other_satir";
        }


  } else {
    echo "Error: " . $ekle1 . "<br>" . $conn->error;
  }
  
}
else echo"post yok";


//question2
if(isset($_POST['q2'])){
  //echo" <br>post var";
$q2=$_POST["q2"];

$ekle2 = "INSERT INTO  deneme(q2)
VALUES ( '$q2')";

if ($conn->query($ekle2) === TRUE) {
  echo "<br> <BR><BR><BR><BR>    DRİVER SORUSU    ";


   // question 2 için verileri çek 
        // 1 year İÇİN  SATIR SAYISINI BUL 
        $sorgu2_1 = "SELECT q2 FROM deneme WHERE q2='1 '";
        $q2_one=$conn->query($sorgu2_1);
        if($q2_one->num_rows>0){
        $q2_one_satir=mysqli_num_rows($q2_one);// cevabı yes olan satır sayısını bize verir 
         echo"$q2_one_satir";
        }
        
        //  2 year İÇİN SATIR SAYISINI BUL 
        $sorgu2_2 = "SELECT q2 FROM deneme WHERE q2='2  '";
        $q2_two=$conn->query($sorgu2_2);
        if($q2_two->num_rows>0){
        $q2_two_satir=mysqli_num_rows($q2_two);
         echo"$q2_two_satir";
        }

      // 3 more   İÇİN SATIR SAYISINI BUL 
       $sorgu2_3 = "SELECT q2 FROM deneme WHERE q2='3 & 3+'";
      $q2_three=$conn->query($sorgu2_3);
      if($q2_three->num_rows>0){
      $q2_three_satir=mysqli_num_rows($q2_three);
       echo"$q2_three_satir";
      }





} else {
  echo "Error: " . $ekle2 . "<br>" . $conn->error;
}

}
else echo"post yok";




 //question3
// veri ekleme post kontrolü
if(isset($_POST['q3'])){
  // echo"post var";
 $q3=$_POST["q3"];
 
 $ekle3 = "INSERT INTO  deneme(q3)
 VALUES ( '$q3')";
 
 if ($conn->query($ekle3) === TRUE) {
   echo "FİKİR SORGUSU<BR> <br><br><br><br><br> :";
       // question 3 için verileri çek 
       // YES İÇİN  SATIR SAYISINI BUL 
         $sorgu3_y = "SELECT q3 FROM deneme WHERE q3='yes'";
         $q3_yes=$conn->query($sorgu3_y);
         if($q3_yes->num_rows>0){
         $q3_yes_satir=mysqli_num_rows($q3_yes);// cevabı yes olan satır sayısını bize verir 
          echo"$q3_yes_satir";
         }
         
         // NO İÇİN SATIR SAYISINI BUL 
         $sorgu3_n = "SELECT q3 FROM deneme WHERE q3='no'";
         $q3_no=$conn->query($sorgu3_n);
         if($q3_no->num_rows>0){
         $q3_no_satir=mysqli_num_rows($q3_no);
          echo"$q3_no_satir";
         }

       // other  İÇİN SATIR SAYISINI BUL (kararsızız seçeneği için )
        $sorgu3_k = "SELECT q3 FROM deneme WHERE q3='kararsızız'";
       $q3_kararsızız=$conn->query($sorgu3_k);
       if($q3_kararsızız->num_rows>0){
       $q3_kararsızız_satir=mysqli_num_rows($q3_kararsızız);
        echo"$q3_kararsızız_satir";
       }


 } else {
   echo "Error: " . $ekle1 . "<br>" . $conn->error;
 }
 
}
else echo"post yok";












  
  $conn->close();

?>