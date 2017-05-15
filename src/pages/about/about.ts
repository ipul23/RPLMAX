import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { TabsPage } from '../tabs/tabs';

@Component({
  selector: 'page-about',
  templateUrl: 'about.html'
})
export class DaftarPage {

  constructor(public navCtrl: NavController) {

  }
  launchBerandaPage(){
    this.navCtrl.push(TabsPage);
  }
}
