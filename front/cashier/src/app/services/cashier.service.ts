import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global'

@Injectable()
export class CashierService {
    public url: string;

    constructor(
        private _http: Http
    ) { 
        this.url = GLOBAL.url;
    }

    getResult(cantidad){
        let params = "cantidad="+cantidad;
        let headers = new Headers(
            {
                'Content-Type': 'application/x-www-form-urlencoded',
            }
        );

        return this._http.post(this.url+'/retiro', params, {headers: headers})
                .map(res=>res.json());
    }

}
