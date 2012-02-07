<?php

$dbName = "gtfs-demo";
include('sql-connect.php');

// SQL Queries to create all needed tables to fill with data!
// Don't change any of this unless you know what you're doing.

$createDB = "
CREATE SCHEMA `$dbName` ;
";

$sqlAgency = "
CREATE TABLE agency(
agency_id int(11),
agency_name varchar(255),
agency_url varchar(255),
agency_timezone varchar(255),
agency_lang varchar(255),
agency_phone varchar(255),
PRIMARY KEY(agency_id)
)
";

$sqlCalendar = "
CREATE TABLE calendar(
service_id int(11),
monday tinyint(1),
tuesday tinyint(1),
wednesday tinyint(1),
thursday tinyint(1),
friday tinyint(1),
saturday tinyint(1),
sunday tinyint(1),
start_date varchar(255),
end_date varchar(255),
start_date_timestamp int(11),
end_date_timestamp int(11)
)";

$sqlCalendarDates = "
CREATE TABLE calendar_dates(
service_id int(11),
date varchar(255),
date_timestamp int(11),
exception_type int(2)
)";

$sqlRoutes = "
CREATE TABLE routes(
route_id int(11),
agency_id varchar(255),
route_short_name varchar(255),
route_long_name varchar(255),
route_type int(2),
route_text_color varchar(255),
route_color varchar(255),
route_url varchar(255),
route_desc varchar(255),
PRIMARY KEY(route_id)
)";

$sqlStopTimes = "
CREATE TABLE stop_times(
trip_id int(11),
arrival_time time,
arrival_time_seconds int(11),
departure_time time,
departure_time_seconds int(11),
stop_id int(11),
stop_sequence int(11),
stop_headsign varchar(255),
pickup_type int(2),
drop_off_type int(2),
shape_dist_traveled varchar(255)
)";

$sqlStops = "
CREATE TABLE stops(
stop_id int(11),
stop_code varchar(255),
stop_name varchar(255),
stop_desc varchar(255),
stop_lat decimal(8,6),
stop_lon decimal(8,6),
zone_id int(11),
stop_url varchar(255),
location_type int(2),
parent_station int(11),
PRIMARY KEY(stop_id)
)";


$sqlTrips = "
CREATE TABLE trips(
route_id int(11),
service_id varchar(255),
trip_id int(11),
trip_headsign varchar(255),
trip_short_name varchar(255),
direction_id tinyint(1),
block_id int(11),
shape_id int(11),
PRIMARY KEY(trip_id)
)";


// Creates and selects DB
mysql_query($createDB);
mysql_select_db($dbName);

// Create the tables for GTFS data

mysql_query($sqlAgency);
mysql_query($sqlCalendar);
mysql_query($sqlCalendarDates);
mysql_query($sqlRoutes);
mysql_query($sqlStopTimes);
mysql_query($sqlStops);
mysql_query($sqlTrips);


?>

