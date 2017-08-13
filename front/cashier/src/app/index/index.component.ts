import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { CashierService } from '../services/cashier.service';
declare let $ : any;
@Component({
  	selector: 'app-index',
  	templateUrl: './index.component.html',
  	styleUrls: ['./index.component.css'],
  	providers: [CashierService]
})
export class IndexComponent implements OnInit {
	public resultadoRetiro;

  	constructor(
  		private _router: Router,
  		private _route: ActivatedRoute,
  		private _cashierService: CashierService
  	) { 
  	}

  	ngOnInit() {
  		localStorage.removeItem('resultado_retiro');
  	}

  	onSubmit(cantidad:string){

  		if (!(/^\+?(0|[1-9]\d*)$/).test(cantidad)) {
  			$(".alert>strong").html("No se aceptan numeros decimales");
  			$(".alert").removeClass("hide");
  			return false;
  		}

  		this._cashierService.getResult(cantidad).subscribe(
  			response => {
  				this.resultadoRetiro = response;
  				if (this.resultadoRetiro.code == 200) {
  					localStorage.setItem('resultado_retiro', JSON.stringify(this.resultadoRetiro.billetesa));
  					window.location.href = "/end";
  				} else {
  					$(".alert>strong").html(response.message);
  					$(".alert").removeClass("hide");
  				}
  			},
  			error => {
  				console.log(<any>error);
  			}
  		);
  	}

}
