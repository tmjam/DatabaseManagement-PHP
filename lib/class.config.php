<?php


/********************************************
    Document   : Configuration for the project
    Created on : February 9, 2013, 11:27 AM
    Author     : Tauseef Jamadar
    Description:
        Class contains all the configurable values
*********************************************/


error_reporting(0);
class config{

        /********Database Settings**************/

    public static $DATABASE_USER = "root";
    public static $DATABASE_PASSWORD = "root";
    public static $DATABASE_NAME = "db";
    public static $DATABASE_HOST = "localhost";


    public static $RECORDS_PER_PAGE = 25;
    public static $EMAIL_FROM = "not_reply_AKppdb@tjlance.com";
    public static $EMAIL_FROM_NAME = "Admin PPTDB";
    public static $ADMIN_EMAIL = "tauseef.jamadar@yahoo.com";
    public static $ADMIN = "Admin PPTDB";
    public static $FILE_ATTACHMENT_SIZE = 8000000;

}
?>