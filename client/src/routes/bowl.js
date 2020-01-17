import React from 'react';
import { Route } from 'react-router-dom';
import { List, Create, Update, Show } from '../components/bowl/';

export default [
  <Route path="/bowls/create" component={Create} exact key="create" />,
  <Route path="/bowls/edit/:id" component={Update} exact key="update" />,
  <Route path="/bowls/show/:id" component={Show} exact key="show" />,
  <Route path="/bowls/" component={List} exact strict key="list" />,
  <Route path="/bowls/:page" component={List} exact strict key="page" />
];
