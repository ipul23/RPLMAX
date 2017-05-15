import { NgModule, ErrorHandler } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicApp, IonicModule, IonicErrorHandler } from 'ionic-angular';
import { MyApp } from './app.component';
import { DaftarPage } from '../pages/about/about';
import { MasukPage } from '../pages/home/home';
import { TabsPage } from '../pages/tabs/tabs';
import { WelcomePage } from '../pages/welcome/welcome';
import { BerandaPage } from '../pages/beranda/beranda';

import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { HistoryPage } from '../pages/history/history';
import { AccountPage } from '../pages/account/account';

@NgModule({
  declarations: [
    MyApp,
    DaftarPage,
    MasukPage,
    TabsPage,
    WelcomePage,
    BerandaPage,
    HistoryPage,
    AccountPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    DaftarPage,
    MasukPage,
    TabsPage,
    WelcomePage,
    BerandaPage,
    HistoryPage,
    AccountPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
