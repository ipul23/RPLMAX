import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { TabsPage } from '../tabs/tabs';

@Component({
  selector: 'page-about',
  templateUrl: 'about.html'
})
export class DaftarPage {

  public event = {
    month: '1990-02-19',
  }

  constructor(public navCtrl: NavController) {

  }
  launchBerandaPage(){
    this.navCtrl.push(TabsPage);
  }
}
