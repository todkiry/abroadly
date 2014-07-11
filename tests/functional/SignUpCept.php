<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for abroadly account');

$I->amOnPage('/');
$I->click('Sign up');
$I->seeCurrentUrlEquals('/signup');

$I->fillField('Name:', 'JohnDoe');
$I->fillField('Email:', 'JohnDoe@gmail.com');
$I->fillField('Password:', 'JohnDoe');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to Abroadly');