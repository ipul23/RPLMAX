import { Component } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { AccountPage } from '../account/account';
/*
  Generated class for the Editprofile page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-editprofile',
  templateUrl: 'editprofile.html'
})
export class EditprofilePage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public alerCtrl:AlertController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad EditprofilePage');
  }

doAlert() {
    let alert = this.alerCtrl.create({
      title: 'Thank You!',
      message: 'Your profile had been successfully edited.',
      buttons: ['Ok']
    });
    alert.present()
  }

launchAccountPage(){
    this.navCtrl.push(AccountPage);
  }
}
