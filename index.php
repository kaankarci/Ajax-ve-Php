<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript"> 
//dosya ismi Dosya içindeki değişiklik 2
$(document).ready(function() { 
  $('#dosyaurl').change(function() {
	  	 
	 var  filename = $('#dosyaurl').val().replace(/.*(\/|\\)/, '');
document.getElementById("dosyaismi").innerHTML=filename;});
});
//dosya ismi son.
	$(function(){
		$(".hidden-class").hide();
		
		$(".btnSubmit").click(function(){
		
		
var values = {};
values['value1'] = $("#isim").val();
values['value2'] = $("#tarih").val();
values['value3'] = $("#renk").val();
values['value4'] = $("#posta").val();
values['value5'] = $("#ay").val();
values['value6'] = $("#numara").val();
values['value7'] =  $("#radios input[type='radio']:checked").val();
values['value8'] = $("#sifre").val();
values['value9'] = $("#mesafe").val();
values['value10'] = $("#telefon").val();
if($("#kvkk").prop("checked")){values['value11'] = "Kvkk onaylı";}
else{values['value11'] = "Kvkk onaysız";}
values['value12'] = $("#dosyaurl").val();
				
				$.ajax({
					type: "POST",
					url: "post.ajax.php",
					data: values,
					success: function(x){
					console.log(x);							
							
					}
				});
				
		
		
		});
			
			
	});
	</script>
<style>
body {
  background-color: #EBEBEB;
}
.note
{
	margin-top:1%;
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
	 background-color: white;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
margin-top: 10%;
    border:none;
    border-radius:1.5rem;
    padding: 4%;
    width: 100%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
.file
{
    border:none;
	border: 1px solid #ced4da;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;

}
#customFile{
	 cursor: pointer;
	
}
</style>
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Kayıt Yap</p>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><h6>İsim</h6>
                                <input type="text" class="form-control" id="isim" placeholder="İsim *" value=""/>
                            </div>
                            <div class="form-group"><h6>Doğum Tarihi</h6>
                                <input type="date" class="form-control" id="tarih" placeholder="Soyisim *" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><p><h6>Renk</h6></p>
                                <input type="color" class="form-control" id="renk" placeholder="Şifre *"/>
                            </div>
                            <div class="form-group"><h6>E-Posta</h6>
                                <input type="mail" class="form-control" id="posta" placeholder="E-Posta *" value=""/>
                            </div>
                        </div>
						 <div class="col-md-6">
                            <div class="form-group"><p><h6>Başlangıç Tarihi</h6></p>
                                <input type="month" class="form-control" id="ay" placeholder="Şifre *" value=""/>

                            </div>
                            <div class="form-group"><h6>Kaç Yıldır Çalışıyorsunuz?</h6>
                                <input type="number" class="form-control" id="numara" placeholder="" value=""/>
                            </div>
							
                        </div>
						<div class="col-md-6">
                            <div class="form-group"><p><h6>Mezun Musunuz?</h6></p>
							<div id="radios">
							  <label><input type="radio" name="mezun" id="mezun" value="Evet"/> Evet</label>
                             <label><input type="radio" name="mezun" id="mezun" value="Hayır"/> Hayır</label>
							  </div>
                            </div>
                            <div class="form-group"><h6>Şifreniz</h6>
                                <input type="password" class="form-control" id="sifre" placeholder="" value=""/>
                            </div>
							
                        </div>
						<div class="col-md-6">
                            <div class="form-group"><p><h6>Firmaya Mesafeniz? (km 0-50)</h6></p>
							<div id="radios">
							  <input type="range" class="form-control" min="0" max="50" id="mesafe" placeholder="" value=""/>
							  </div>
                            </div></div><div class="col-md-6">
                            <div class="form-group"><h6>Telefon</h6>
                               <input type="tel" id="telefon" class="form-control" placeholder="(123)-456-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                            </div>
							</div>
                       	 <div class="col-md-12">
						 <h6>KVKK Metinleri</h6><h6></h6>
						  <input type="checkbox" id="kvkk" name="kvkk" value="kvk">
  <label for="kvkk"> Okudum ve Kabul Ediyorum.</label><br>

						 </div>
						 <div class="col-md-12">
						   
						 <div class="custom-file">
    <input type="file" class="custom-file-input" id="dosyaurl">
    <label class="custom-file-label" for="customFile">Resim Yükle</label>
  </div>
  <div id="dosyaismi"></div>
                        </div>
						<div class="col-md-3">    <button type="submit" class="btnSubmit">Kayıt</button></div>

                    </div>
                
                </div>
				</div></div>
		
		</body></html>