import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { AuthProvider } from '../../providers/auth/auth';

@Component({
  selector: 'page-contact',
  templateUrl: 'contact.html'
})
export class ContactPage {

  constructor(public navCtrl: NavController, public authProvider: AuthProvider) {

  }

  login(name:string, password:string) {
  	this.authProvider.login(name, password)
  	.subscribe (
  		(res) => {
  			console.log(res);
  		},
  		(error) => {
  			console.log(error);

  		}
  	);
  	
  }

}
