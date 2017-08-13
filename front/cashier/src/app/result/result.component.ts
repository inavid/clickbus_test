import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';

@Component({
  selector: 'app-result',
  templateUrl: './result.component.html',
  styleUrls: ['./result.component.css']
})
export class ResultComponent implements OnInit {
	public result_info:any;
	public readable:any;

  	constructor(
  		private _router: Router,
  		private _route: ActivatedRoute,
  	) { 
  		this.result_info = JSON.parse(localStorage.getItem('resultado_retiro'));
  	}

  	ngOnInit() {
  		var cantidades = [];
  		Object.keys(this.result_info).forEach((key) => {
  		  	cantidades.push(this.result_info[key]);
  		});
  		this.readable = cantidades;
  	}

  	//Evento de terminar sesión
  	salir(){
  		location.href = "/";
  		localStorage.removeItem('resultado_retiro');
  	}

}
