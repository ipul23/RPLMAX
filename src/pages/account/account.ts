import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import {WelcomePage } from '../welcome/welcome';
import {TentangPage } from '../tentang/tentang';
import {ReviewPage } from '../review/review';
import {EditprofilePage} from '../editprofile/editprofile';
import {EditpasswordPage} from '../editpassword/editpassword';
/*
  Generated class for the Account page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-account',
  templateUrl: 'account.html'
})
export class AccountPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

launchWelcomePage(){
    this.navCtrl.push(WelcomePage);
    window.location.reload();
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad AccountPage');
  }

  openNavTentangPage() {
    this.navCtrl.push(TentangPage);
  }

launchReviewPage(){
    this.navCtrl.push(ReviewPage);
  }

launchEditprofilePage(){
    this.navCtrl.push(EditprofilePage);
  }

launchEditpasswordPage(){
    this.navCtrl.push(EditpasswordPage);
  }
}
