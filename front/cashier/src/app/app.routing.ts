import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { IndexComponent } from './index/index.component';
import { ResultComponent } from './result/result.component';

const appRoutes: Routes = [
	{path:'', component: IndexComponent},
	{path:'index', component: IndexComponent},
	{path:'end', component: ResultComponent},
	{path:'**', component: IndexComponent}
];

export const appRoutingProviders: any[] = [];
export const routing:ModuleWithProviders = RouterModule.forRoot(appRoutes);