@extends('layouts.main')
@section('header')
Form
@endsection

@section('content')
	<div class="card-panel">
                      <h4 class="header2">Basic Form</h4>
                      <div class="row">
                        <form class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="name" type="text">
                              <label for="first_name">Name</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="email" type="email">
                              <label for="email">Email</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="password" type="password">
                              <label for="password">Password</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <textarea id="message" class="materialize-textarea"></textarea>
                              <label for="message">Message</label>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                  <i class="material-icons right">send</i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>

                    <!-- batas -->

                    

                    <div class="card-panel">
                    <h4 class="header2">Form with validation</h4>
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name4" class="validate" type="text">
                            <label for="first_name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email4" class="validate" type="email">
                            <label for="email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password5" class="validate" type="password">
                            <label for="password">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">question_answer</i>
                            <textarea id="message4" class="materialize-textarea validate" length="120"></textarea>
                            <label for="message">Message</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

@endsection 