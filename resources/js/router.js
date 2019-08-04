import Home from './_views/Home';
import Signin from './_views/_auth/Signin';

export const routes = [
    { path: '/', name: 'home', meta: { requiresAuth: true }, component: Home },
    { path: '/auth/signin', meta: { isAuthPage: true }, name: 'signin', component: Signin },
];