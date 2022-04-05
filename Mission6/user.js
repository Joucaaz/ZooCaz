class User{
    constructor(email, password) {
      this.email= email;
       this.password= password;
    }
    
    nom() {
        console.log('Email : ' + this.email + '\nPassword : ' + this.password);
    }
}
