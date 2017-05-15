import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { DaftarPage } from '../about/about';
import { TabsPage } from '../tabs/tabs';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class MasukPage {

  constructor(public navCtrl: NavController) {

  }

  launchDaftarPage(){
    this.navCtrl.push(DaftarPage);
  }

launchBerandaPage(){
    this.navCtrl.push(TabsPage);
  }

}
