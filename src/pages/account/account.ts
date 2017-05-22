import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import {WelcomePage } from '../welcome/welcome';
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

}
