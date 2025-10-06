# [Hotel Miranda](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/)

[![N|Solid](https://ci3.googleusercontent.com/meips/ADKq_NaC2dv51GXGIPjA_OFPnOE1uVtETfYD7GXBTQxdRgnRmLzQ9WXRHz3Pz1a_YbsF1kgwckugan02pOePRrPMbyYmBvnKcjqLrQvkRlMp46nDGuQ_JfoAhnhgUvrmJbGbsUBm=s0-d-e1-ft#http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/header_logo.png)](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/)

This project is a mock up web page of a fictional hotel. It has a bunch of different pages to show my abilities working with
[Laravel](https://laravel.com/) (with blade templates) + [MySQL](https://www.mysql.com/), along with [SASS](https://sass-lang.com/) (as shown in the [static version](https://github.com/DavidBurguete/MirandaHotel)), HTML and JS.

# Pages featured (routes)

## /&emsp;(The index page)
The main page, the first thing someone sees when entering the website. 
Here you have a description about the hotel, including a video of the alleged hotel.
It has a form at the top of the page, where you can input an arrival and a departure date, and
it will redirect you to ```/rooms```, where it will display the rooms available between those days.

## /about-us&emsp;(The hotel description page)
Here you can see a brief description about the hotel, with similar information to the ```/``` _(index)_ page.

## /rooms&emsp;(The rooms page)
This is the "main" page, since it's the one that holds the rooms a client wish to book.
It has two display modes: a grid view, showing 3 columns and a variable number of rows (depending on the requested 
amount, since the client can filter rooms given a date from the ```/``` _(index)_ page), and a list view, similar to the grid,
but with only a single column with a different style.

## /rooms/{$id}&emsp;(The room to book page)
Once the client has selected the desired room, it will display more info of the room compared to the ```/rooms``` page. 
It will display a description of the room, a form to book the room (asking for the check in date, check out date, and 
the client email), the amenities available (the same for every room), the founder of the hotel, the cancellation policy
and related rooms.

## /rooms/{$id}&emsp;(The receipt, once the room has been booked)
If the client decides to book a room, it will print on screen a compact version of the room info, as if it were a receipt.
It will also send out an email to the given email so the client has all the info related to the booked room.

## /offers&emsp;(The receipt, once the room has been booked)
This page will display the rooms that have a discount available, with a selection of popular rooms at the end.
If the client clicks on either of the offered or popular rooms booking buttons, it will be redirected to the 
associated ```/rooms/{$id}```.

## /contact&emsp;(The page to keep in contact with us)
If the client wants to ask anything, here they can find the email, phone number and address (none of the info is real).
It comes also with a map of the location of the hotel (also fictional), and a contact form to send any question, suggestions, etc.

## /non-defined-page (or any url other than the aforementioned)&emsp;(The 404 error page)
This one will only display that the requested url doesn't exist, with changes in the body "header" to reflect that the page couldn't been found

---

# Working with the forms of the website

Given the following rows extracted from the bookings table (extracted from the database), you can see there's a bunch of rooms that have been booked around October of 2026.
Knowing this, you can filter from the home page in the week from monday 19 to sunday 25, and the following rooms won't appear on the rooms page (you can try adding your own days and filter)
Also, inside any given room page, you can input a date and it will check if the room is booked those days (the room ids below have been given a link to their respective room to try out!).

| id | client_name | room_id | order_date | check_in_date | check_out_date |
| --- | --- | --- | --- | --- | --- |
| **1** | `dburgueteg@gmail.com` | [7](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/7) | 2025-10-02 | 2025-10-02 | 2025-10-04 |
| **2** | `eledenthas@gmail.com` | [7](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/7) | 2025-10-02 | 2026-10-16 | 2026-10-31 |
| **3** | `david.burguete10@gmail.com` | [10](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/10) | 2025-10-02 | 2026-10-12 | 2026-10-25 |
| **4** | `dburgueteg@gmail.com` | [25](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/25) | 2025-10-02 | 2026-10-01 | 2026-10-31 |
| **5** | `eledenthas@gmail.com` | [6](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/6) | 2025-10-02 | 2026-10-05 | 2026-10-30 |
| **6** | `dburgueteg@gmail.com` | [11](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/11) | 2025-10-02 | 2026-10-11 | 2026-10-25 |
| **7** | `dburgueteg@gmail.com` | [2](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/2) | 2025-10-02 | 2026-09-16 | 2026-10-16 |
| **8** | `dburgueteg@gmail.com` | [13](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/13) | 2025-10-02 | 2026-09-10 | 2026-10-21 |
| **9** | `eledenthas@gmail.com` | [13](http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/rooms/13) | 2025-10-02 | 2026-10-25 | 2026-11-09 |