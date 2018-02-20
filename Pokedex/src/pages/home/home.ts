import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { PokemonsProvider } from '../../providers/pokemons/pokemons';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  pokemons =  []; 
  nextId:number;

  constructor(public navCtrl: NavController,public pkmnProvider:PokemonsProvider) {
    this.nextId = 0;
  }

  getPokemon(){
    this.nextId++;
    this.pkmnProvider.getPokemon(this.nextId)
      .subscribe(
        (res)=>{
          this.pokemons.push(res); 
          console.log(res);
        }
      )
  }

}
