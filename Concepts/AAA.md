# AAA - *A*uthentication,*A*uthorization and *A*ccounting

The *AAA* term refers to protocols for procedures of Authentication,Authorization and Accounting.
For example, one could request to do a **remote virtual control room experiment** from home using a dialin provider. The
   request would only be successful if the dialin access server allows
   it and if there is bandwidth available (bandwidth broker) and if the
   experimenter has the money to pay for it (E-Commerce).  Possibly the
   people who specified the bandwidth broker protocol did not think of
   combining quality of service with a network service authorization in
   a single AAA request, but this generic model would allow it.

![AAAExample](/image/AAAExample.png)

1. **Authentication:** It's the reference to the process of confirm the valid user that realize the service request. This process is based on an apresentation with identity and one or more features (password,digital certificate).

* Once one end point has established its initial contact with another peer, it must decide what authentication polyce to adapt.

2. **Authorization:** Considering system authentication performed.
The authorization can be based on constraints, which are defined by an access time or physical location of the user, for example.
 The authorization determines the nature of the service whose access is allowed to a user.
 Examples of service types include: IP address filtering, address assignment, route assignment, QoS differentiated services, bandwidth control / traffic management, compulsory tunneling for a particular endpoint, and encryption.

3. **Accounting:** The audit procedure is a reference to the collection of information related to users on the Authentication and Authorization processes.
This information can be used for management, planning, billing and so on. Real-time auditing occurs when information about users is trafficked at the time of resource consumption. In batch audit information is recorded and sent later.
 * The information that is typically related to this process is the identity of the user, the nature of the service delivered, the time the service starts and the time of its termination. 

## Reference

* [AAA](https://searchsecurity.techtarget.com/definition/AAA-server) - AAA server.
* [Triplo-A](https://pt.wikipedia.org/wiki/Protocolos_AAA) - AAA Protocols.
* [RFC 2903](https://tools.ietf.org/html/rfc2903#page-4) - Generic AAA Architecture
