<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/','FrontendController@index');
Route::get('/locale/{locale}','FrontendController@switch');
Route::get('/about/','FrontendController@about');
Route::get('/paparp/','FrontendController@paparp');
Route::get('/copd/','FrontendController@copd');
Route::get('/covid/','FrontendController@covid');
Route::get('/pr/','FrontendController@pr');
Route::get('/ozonetherapy/','FrontendController@ozonetherapy');

Route::get('/rashidulhassanprofile/','FrontendController@rashidulhassanprofile');
Route::get('/contactus/','FrontendController@contactus');
Route::get('/achievements/','FrontendController@achievements');
Route::get('/educationscholarship/','FrontendController@educationscholarship');
Route::get('/reliefandcharity/','FrontendController@reliefandcharity');
Route::get('/betterliving/','FrontendController@betterliving');
Route::get('/medicalprograms/','FrontendController@medicalprograms');
Route::get('/achievementsadd/','achievementsController@achievementsadd');
Route::get('/booklist/','FrontendController@booklist');
Route::get('/article/','FrontendController@article');
Route::get('/guidelines/','FrontendController@guidelines');
Route::get('/photogellary/','FrontendController@photogellary');
Route::get('/photogellaryfolder/','FrontendController@photogellaryfolder');
Route::get('/videogellaryfolder/','FrontendController@videogellaryfolder');
Route::get('/takecare/','FrontendController@takecare');
Route::get('/covidmanagement/','FrontendController@covidmanagement');
Route::get('/ramadanlifestyle/','FrontendController@ramadanlifestyle');
Route::get('/pureweekvideo/','FrontendController@pureweekvideo');

Route::get('/freemaskdistribution/','FrontendController@freemaskdistribution');

Route::get('/pureweek/','FrontendController@pureweek');
Route::get('/scientificseminaratfeni/','FrontendController@scientificseminaratfeni');

Route::get('/news/','FrontendController@news');
Route::get('/socialworks/','FrontendController@socialworks');
Route::get('/ongoingproject/','FrontendController@ongoingproject');
Route::get('/affiliations/','FrontendController@affiliations');

Route::post('/contactsus/store','FrontendController@store');
Route::get('/usermessageinfo','FrontendController@usermessageinfo');

Route::get('/admins', 'HomeController@admin')->name('admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lecture', 'lectureController@index')->name('home');
Route::post('/lecture/store', 'lectureController@store')->name('plecture');
Route::get('lecture/deletedata/{id}', 'lectureController@deletedata')->name('dlecture');
Route::get('lecture/editdata/{id}', 'lectureController@editdata')->name('dlecture');
Route::get('achievements/editdata/{id}', 'achievementsController@achievementsEdit')->name('dlecture');

Route::get('/quote','QuotesController@quotes')->name('pquotes');
Route::post('/quote/store','QuotesController@store')->name('pquotes');
Route::get('quote/deletedata/{id}','QuotesController@deletedata')->name('dquotes');

Route::get('/slider','TaskController@slider')->name('home_page');

Route::post('/slider/store','TaskController@store')->name('task_store');
Route::post('/task/update','TaskController@update')->name('task_update');
Route::get('/task/deletedata/{id}','TaskController@destroy')->name('task_destroy');



//add banner
Route::get('/add/banner','BackendController@add_banner')->name('add.banner');
// save banner
Route::POST('/save-banner', 'BackendController@save_banner')->name('save.banner');
//Image banner delete
Route::get('/banner/delete/{banner_id}', 'BackendController@banner_delete')->name('banner.delete');
// active banner
Route::get('/active/banner/{banner_id}', 'BackendController@banner_active');
// Deactive banner
Route::get('/deactive/banner/{banner_id}', 'BackendController@banner_deactive');


//Massage From Prof.
Route::get('/add/prof/massage','BackendController@prof_massage')->name('prof.massage');
// save Prof Massage
Route::POST('/prof/massage/save', 'BackendController@prof_massage_save')->name('prof.massage.save');

//add QUOTE
Route::get('/add/quotes','BackendController@add_quotes')->name('add.quotes');
// save Prof Massage
Route::POST('/quotes/save', 'BackendController@quotes_save')->name('quotes.save');

// about
Route::get('/add/about','BackendController@add_about')->name('add.about');
// save about
Route::POST('/about/save', 'BackendController@save_about')->name('save.about');

//profile
Route::get('/add/profile','BackendController@add_profile')->name('add.profile');
// save profile
Route::POST('/profile/save', 'BackendController@save_profile')->name('save.profile');

//show  Customer Query
Route::get('/show/customer/massage','BackendController@show_customer_massage')->name('show.customer.massage');
//save contact us form
Route::POST('/save/customer/contact/form', 'BackendController@customer_form_save')->name('customer.form.save');
//customer form delete
Route::get('/customer/contact/form/delete{customer_id}', 'BackendController@customer_form_delete')->name('customer.form.delete');

//add news
Route::get('/add/news','BackendController@add_news')->name('add.news');
// save news
Route::POST('/news/save', 'BackendController@save_news')->name('save.news');
//news delete
Route::get('/news/delete{customer_id}', 'BackendController@news_delete')->name('news.delete');

//add Ongoing Research
Route::get('/add/ongoing/research','BackendController2@add_ongoing_research')->name('add.ongoing.research');
// save Ongoing Research
Route::POST('/Ongoing-Research/save', 'BackendController2@save_ongoing_research')->name('save.ongoing.esearch');
// Ongoing Research delete
Route::get('/Ongoing-Research/delete/{research_id}', 'BackendController2@ongoing_research_delete')->name('ongoing.research.delete');


//add BookList
Route::get('/add/booklist','BackendController2@add_booklist')->name('add.booklist');
// save Ongoing Research
Route::POST('/booklist/save', 'BackendController2@save_booklist')->name('save.booklist');
// Ongoing Research delete
Route::get('/booklist/delete/{booklist_id}', 'BackendController2@booklist_delete')->name('booklist.delete');



//add Article
Route::get('/add/article','BackendController2@add_article')->name('add.article');
// save Article
Route::POST('/article/save', 'BackendController2@save_article')->name('save.article');
// Article delete
Route::get('/article/delete/{article_id}', 'BackendController2@article_delete')->name('article.delete');


//add Charity
Route::get('/add/charity','BackendController2@add_charity')->name('add.charity');
// save Charity
Route::POST('/charity/save', 'BackendController2@save_charity')->name('save.charity');
// delete Charity
Route::get('/charity/delete/{charity_id}', 'BackendController2@charity_delete')->name('charity.delete');


//add Better Living
Route::get('/add/betterliving','BackendController2@add_betterliving')->name('add.betterliving');
// save Charity
Route::POST('/betterliving/save', 'BackendController2@save_betterliving')->name('save.betterliving');
// delete Charity
Route::get('/betterliving/delete/{betterliving_id}', 'BackendController2@betterliving_delete')->name('betterliving.delete');


//add copd
Route::get('/add/copd','HealthCareController@add_copd')->name('add.copd');
// save covid
Route::POST('/copd/save', 'HealthCareController@copd_save')->name('copd.save');

//add covid
Route::get('/add/covid','HealthCareController@add_covid')->name('add.covid');
// save covid
Route::POST('/covid/save', 'HealthCareController@covid_save')->name('covid.save');


//add pr
Route::get('/add/pr','HealthCareController@add_pr')->name('add.pr');
// save covid
Route::POST('/pr/save', 'HealthCareController@pr_save')->name('pr.save');


//add paparp
Route::get('/add/paparp','HealthCareController@add_paparp')->name('add.paparp');
// save covid
Route::POST('/paparp/save', 'HealthCareController@paparp_save')->name('paparp.save');


//add ozonetherapy
Route::get('/add/ozonetherapy','HealthCareController@add_ozonetherapy')->name('add.ozonetherapy');
// save covid
Route::POST('/ozonetherapy/save', 'HealthCareController@ozonetherapy_save')->name('ozonetherapy.save');


//photos

//scientificseminaratfeni
Route::get('/add/photo/scientificseminaratfeni','PhotoController@scientificseminaratfeni')->name('add.photo.scientificseminaratfeni');
// save scientificseminaratfeni
Route::POST('/scientificseminaratfeni/save', 'PhotoController@scientificseminaratfeni_save')->name('scientificseminaratfeni.save');
// delete scientificseminaratfeni
Route::get('/scientificseminaratfeni/delete/{scientificseminaratfeni_id}', 'PhotoController@scientificseminaratfeni_delete')->name('scientificseminaratfeni.delete');


//pureweek
Route::get('/add/photo/pureweek','PhotoController@pureweek')->name('add.photo.pureweek');
// save pureweek
Route::POST('/pureweek/save', 'PhotoController@pureweek_save')->name('pureweek.save');
// delete pureweek
Route::get('/pureweek/delete/{pureweek_id}', 'PhotoController@pureweek_delete')->name('pureweek.delete');

//freemaskdistribution
Route::get('/add/photo/freemaskdistribution','PhotoController@freemaskdistribution')->name('add.photo.freemaskdistribution');
// save freemaskdistribution
Route::POST('/freemaskdistribution/save', 'PhotoController@freemaskdistribution_save')->name('freemaskdistribution.save');
// delete freemaskdistribution
Route::get('/freemaskdistribution/delete/{freemaskdistribution_id}', 'PhotoController@freemaskdistribution_delete')->name('freemaskdistribution.delete');


//photogellary
Route::get('/add/photo/photogellary','PhotoController@photogellary')->name('add.photo.photogellary');
// save photogellary
Route::POST('/photogellary/save', 'PhotoController@photogellary_save')->name('photogellary.save');
// delete photogellary
Route::get('/photogellary/delete/{photogellary_id}', 'PhotoController@photogellary_delete')->name('photogellary.delete');


//videos

//takecare
Route::get('/add/video/takecare','VideoController@takecare')->name('add.video.takecare');
// save takecare
Route::POST('/takecare/save', 'VideoController@takecare_save')->name('takecare.save');
// delete takecare
Route::get('/takecare/delete/{takecare_id}', 'VideoController@takecare_delete')->name('takecare.delete');


//pureweekvideo
Route::get('/add/video/pureweekvideo','VideoController@pureweekvideo')->name('add.video.pureweekvideo');
// save pureweekvideo
Route::POST('/pureweekvideo/save', 'VideoController@pureweekvideo_save')->name('pureweekvideo.save');
// delete pureweekvideo
Route::get('/pureweekvideo/delete/{pureweekvideo_id}', 'VideoController@pureweekvideo_delete')->name('pureweekvideo.delete');

//covidmanagement
Route::get('/add/video/covidmanagement','VideoController@covidmanagement')->name('add.video.covidmanagement');
// save covidmanagement
Route::POST('/covidmanagement/save', 'VideoController@covidmanagement_save')->name('covidmanagement.save');
// delete covidmanagement
Route::get('/covidmanagement/delete/{covidmanagement_id}', 'VideoController@covidmanagement_delete')->name('covidmanagement.delete');


//ramadanlifestyle
Route::get('/add/video/ramadanlifestyle','VideoController@ramadanlifestyle')->name('add.video.ramadanlifestyle');
// save ramadanlifestyle
Route::POST('/ramadanlifestyle/save', 'VideoController@ramadanlifestyle_save')->name('ramadanlifestyle.save');
// delete ramadanlifestyle
Route::get('/ramadanlifestyle/delete/{ramadanlifestyle_id}', 'VideoController@ramadanlifestyle_delete')->name('ramadanlifestyle.delete');
