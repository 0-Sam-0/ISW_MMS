# ISW_MMS
Project for the 'Ingegneria del Software' (Software Engineering) course of the bachelor's degree in computer science at University of Parma.

**Team Name**: MMS

**Team Components**:
* Francesco
* Luca
* Samuel

# General Description:
Development of a web application for managing the teaching calendar of a degree program or an entire department or university.\
Teachings and faculty in charge of those teachings are initially loaded into the system.\
A teaching is offered by a particular course of study, but another course of study can make use of it.\
In the initial phase, professors define their preferences, understood as preferred days and preferred time slots.\
One or more administrative staff enter classroom availability into the system.\
Once preferences and availability are entered, the system calculates a possible schedule that does not violate availability constraints and tries to violate faculty preferences as little as possible.\
The course chairperson, or his or her vicar, can manually modify the produced calendar or choose from a list of calendar with equal minimum cost.\
Professors are divided into bands. The highest band has priority over the others.

# Minimum requirements
- A server-side Docker

# Rewarding requirements
- Docker for the client side to simulate different devices
