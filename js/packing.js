function Pack_Builder (packObjects) {

  var i = 0;

  add_hosting_pack(packObjects[i] ,  test_callback , i );

  remove_additives();

  submission_obj = {};

  packObjects.forEach((item, i) => {
    console.log( item.description);
    var myBtn = document.getElementById('Gks' + i);
    myBtn.addEventListener ( 'click' ,  function (){
      document.querySelector('#packForm input[name= packName]').value =  item.packName;
      document.querySelector('#packForm input[name= price]').value = item.price;
      document.querySelector('#packForm input[name= transferRate]').value = item.transferRate;
      // document.querySelector('#packForm input[name= description]').value = item.description;
      document.querySelector('#packForm input[name= domain]').value =   item.domain;
      document.querySelector('#packForm input[name= dashboard]').value =   item.dashboard;
      document.querySelector('#packForm input[name= emails]').value =   item.emails;
      document.querySelector('#packForm input[name= timeInterval]').value =   item.timeInterval;
      document.querySelector('#packForm input[name= size]').value =   item.size;
      document.querySelector('#packForm input[name= campDu]').value =   item.campDu;
      document.querySelector('#packForm input[name= clicks]').value =   item.clicks;
      document.getElementById('hidden-content').classList.remove('shifted');
      document.getElementById('hidden-content').classList.remove('finished-suc');
      document.getElementById('hidden-content').classList.remove('finished-fail');
      document.querySelector('[name= user-name]').value = "";
      document.querySelector('[name= user-email]').value = "";
      document.querySelector('[name= user-mob]').value = "";
      submission_obj['packType'] = item.packType;
      document.querySelectorAll("#packForm input[name]:not([type=button])").forEach((inner_item, i) => {
        if (inner_item.value == "") {
          console.log(inner_item.value);
          inner_item.parentNode.style.display = 'none';
        } else {
          console.log(inner_item);
          submission_obj[inner_item.name] = inner_item.value;
        }
      });

      console.log(submission_obj);
     }
   );
  });

  document.getElementById('req_button').addEventListener('click' , function(){
  var userData = [document.querySelector('input[name=user-name]') ,
                  document.querySelector('input[name=user-mob]')  ,
                  document.querySelector('input[name=user-email]')];
  if (formIsValid('#requestForm')) {
    submitFormAjax(submission_obj , userData);
     } else {
      alert('you have to fill all values');
     }
});

  document.querySelector('[name=confirm]').addEventListener('click' , function(){
   document.getElementById('hidden-content').classList.add('shifted');
});

}

function add_hosting_pack( specsObj  , callback , i){
  var packBox = document.getElementById('packBox'),
      packName = specsObj.packName,
      price = specsObj.price,
      timeInterval = specsObj.timeInterval,
      description = specsObj.description,
      size = specsObj.size,
      clicks = specsObj.clicks,
      campaignDuration = specsObj.campDu,
      transferRate = specsObj.transferRate,
      emails = specsObj.emails,
      domain = specsObj.domain,
      dashboard = specsObj.dashboard,
      btnID = 'Gks' + i ,
      temp =            '<div class="social_pack pack">' +
                        '<div class="packhead">' +
                        '<h1>' + packName + '</h1>' +
                        '<h1> <span>' + price + '</span><span>جنية</span></h1>' +
                        '<h5>' + timeInterval + '</h5>' +
                        '</div>' +
                        '<div class="packbody">' +
                        '<h6>' + description + '</h6>' +
                        '<h6>مساحة :<span>'+ size +'</span></h6>' +
                        '<h6>مدة الحملة : <span>' + campaignDuration + '</span></h6>' +
                        '<h6>عدد الكليكات : <span>' + clicks + '</span></h6>' +
                        '<h6>معدل نقل البيانات : <span>' + transferRate + '</span></h6>' +
                        '<h6>عدد الايميلات : <span>' + emails + '</span></h6>' +
                        '<h6>الدومين : <span>' + domain + '</span></h6>' +
                        '<h6>لوحة التحكم : <span>' + dashboard + '</span></h6>' +
                        '</div>' +
                        '<div><a data-fancybox data-src="#hidden-content" href="javascript:;"><button id=' +  btnID  + ' style="outline:none;" type="button" name="button">اطلب الان</button></a></div>' +
                        '</div>';

  packBox.innerHTML += temp;
  callback(specsObj , btnID , i );
}

function remove_additives(){
  document.querySelectorAll('.pack span:empty').forEach((item, i) => {
    item.parentNode.style.display = 'none';
  });
}

function test_callback (Obj , btnID , i){
  i++;
  if (i < packObjects.length) {
    add_hosting_pack(packObjects[i] , test_callback , i );
  }
}

var formIsValid = function(id) {
   var f = false;
   var fields = document.querySelectorAll( id + ' input[type]:not([type=button])');
   for (var i = 0; i < fields.length; i++) {
     if (fields[i].value == "") {
       break;
     }
     if (i == fields.length - 1) {
       f = true;
     }
   }

     return f;
}

function submitFormAjax(p , u) {
    let xmlhttp= window.XMLHttpRequest ?
        new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4){
          if (this.status === 200){
              document.getElementById('hidden-content').classList.add('finished-suc');
            }else {
              document.getElementById('hidden-content').classList.add('finished-fail');
            }
        }
      }

    xmlhttp.open("GET","emailing2.php?emails=" + p.emails  + "&price=" + p.price + "&transferRate=" + p.transferRate + "&domain=" + p.domain + "&dashboard=" + p.dashboard
                                   + "&timeInterval=" + p.timeInterval + "&size=" + p.size + "&username=" + u[0].value + "&usermob=" + u[1].value + "&useremail=" + u[2].value
                                   + "&packType="  +  p.packType + "&packName=" + p.packName + "&description=" + p.description + "&clicks=" + p.clicks + "&campDu=" + p.campDu    , true);
    xmlhttp.send();
}
