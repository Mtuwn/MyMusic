
function Register() {
    let flag = false

    let _email = document.getElementById('email').value;
    if (_email.length === 0) {
        document.getElementById('error_email').innerHTML = 'Email không được bỏ trống';
        flag = true;
    } else {
        let regex_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (regex_email.test(_email) == false) {
            document.getElementById('error_email').innerHTML = 'Email không hợp lệ';
            flag = true;
        } else {
            document.getElementById('error_email').innerHTML = '';

        }

    }   
    let _sdt = document.getElementById('sdt').value;    
    console.log(_sdt);
    if(_sdt.length === 0){
        document.getElementById('error_sdt').innerHTML = 'Số điện thoại không được để trống';
        flag = true;
    } else {
        let regex_sdt = /^(?:\d{10}|\d{11})$/;
        if(regex_sdt.test(_sdt) == false){
            document.getElementById('error_sdt').innerHTML = 'Số điện thoại không hợp lệ';
            flag = true;
        }else {
            document.getElementById('error_sdt').innerHTML = '';  
        }
    }




    let _name = document.getElementById('name').value;
    if (_name.length === 0) {
        document.getElementById('error_name').innerHTML = 'Tên không được bỏ trống';
        flag = true;
    } else {
        let regex_name = /^[A-Z][a-z]{1,6}((?: [A-Z][a-z]{1,6})*)$/
        if (regex_name.test(_name) == false) {
            document.getElementById('error_name').innerHTML = 'Tên không hợp lệ';
            flag = true;
        } else {
            document.getElementById('error_name').innerHTML = ''; 
        }  
    }

    let _user = document.getElementById('user').value;
    if (_user.length === 0) {
        document.getElementById('error_user').innerHTML = 'Tên đăng nhập không được bỏ trống';
        flag = true;
    } else {
        let regex_user = /[A-Z](\w|\.|_|\+|\*|\\|\!|\@|\#|\$|\%|\^|\&){5,32}$/;
        if (regex_user.test(_user) == false) {
            document.getElementById('error_user').innerHTML = 'Tên đăng nhập không hợp lệ';
            flag = true;
        } else {
            document.getElementById('error_user').innerHTML = '';

        }

    }   

    let _password = document.getElementById('password').value;
    if (_password.length == 0) {
        document.getElementById('error_password').innerHTML = 'Mật khẩu không được bỏ trống';
    flag = true;
     } else {
         if (_password.length < 8) { 
             document.getElementById('error_password').innerHTML = 'Mật khẩu quá ngắn';
             flag = true;
         } else {
             document.getElementById('error_password').innerHTML = '';            
         }   
     }

    let _gender = document.getElementsByName('Gender');
    let flag_gender = false;    
    for (let i = 0; i < _gender.length; i++) {
        if (_gender[i].checked) {
            flag_gender = true;
        }
    }   
    if (flag_gender == false) {
        document.getElementById('error_gender').innerHTML = 'Giới tính chưa được chọn';
        flag = true;
    }
    else {
        document.getElementById('error_gender').innerHTML = '';
    }

    if (flag)
        return false;
}
