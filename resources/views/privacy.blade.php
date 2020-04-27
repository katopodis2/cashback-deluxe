@extends('layouts.app')
@section('content')

<div class="homeflex">
    @if(auth()->user())
        @include("partials.left-menu")
    @endif
    <div class="mainPrivacyPolicy">
        <div class="adidasTitle">PERSONAL DATA PROCESSING POLICY</div>
        <div class="privacyPolicyOrange">TERMS AND DEFINITIONS</div>
        <div class="termsAndDefinationDiv">
            <div>This Policy uses the following terms in the meanings explained below:</div>
            <div>a) Data means other data concerning the User (not included in the notion Personal Data).</div>
            <div>b) Legislation means the existing legislation of the Republic of Cyprus.</div>
            <div>c) Operator means WEBIMATIC LIMITED, individually or in cooperation with others organizing and processing Personal Data, as well as defining the purpose of Data Processing, the composition of Personal Data to be processed, actions (operations), taken over Personal Data.</div>
            <div>d) Site a set of programs for computing systems and other information located on the site www.megabonus.com. The Site is an object of intellectual property. Program means software available for downloading on the Site and allowing User to make purchases on the Internet shops in order to obtain Cash back. The description of the characteristics of the Program is available to User on the Site of the Organization on https://megabonus.com/.</div>
            <div>e) Service means the service available on the Site and allowing User to receive Cash back.</div>
            <div>f) Registration means filling in the Registration form on the Site by submitting the necessary information and choosing Login and password or authorization via social networks. The User has the right to apply for the Registration via the following social networks: Vkontakte, Odnoklassniki, Google, Facebook.</div>
            <div>g) Registration form means a located on the Site form designed to be filled in by User to register on the Site.</div>
            <div>h) Personal Data any information directly or indirectly related to a defined or determined individual (User).</div>
            <div>i) User means an individual who possesses legal capacity and installed the Program on the Device and registered on the Site.</div>
            <div>j) Device means any technical device allowing User to download the Program.</div>
            <div>k) Personal account means a personal section of the Service available after registration. User information, account balance details, notifications and other information is available on Personal account.</div>
            <div>l) Personal account balance means the accounting system of returned Cash back on the Site of the Organization. Personal account balance is accessible on Personal account of User.</div>
            <div>m) Login and password means a unique set of characters created by User during the registration to access Personal account.</div>
            <div>n) Personal Data Disclosure means actions aimed at disclosing Personal Data to a specific person or a certain number of persons.</div>
            <div>o) Personal Data subject means User (individual), to whom the Personal Data refer.</div>
            <div>p) Cash back means the return of a part of monetary value (discount) for the goods purchased on Internet shops carried out by Partners.</div>
            <div>q) Partner means a legal person and/or entrepreneur offering Cash back.</div>
        </div>
        <div class="privacyPolicyOrange">GENERAL PROVISIONS</div>
        <div class="termsAndDefinationDiv" id= "generalProvisionsDiv">
            <div>1.1. This Personal Data Processing Policy is designed in accordance with the conditions of Federal Law of 27 July 2006 N 152-FZ ON PERSONAL DATA (as amended and supplemented), and other normative legal acts and defines the mode of operation with Users’ Personal Data and/or transferred by Users and requirements to ensure User safety.</div>
            <div> 1.2. Personal Data security measures are the integral part of Operator’s activity.</div>
        </div>
        <div class="privacyPolicyOrange">PERSONAL DATA PROCESSING PRINCIPLES</div>
        <div class="termsAndDefinationDiv" id= "personalDataDiv">
            <div>2.1. Personal Data processing is performed in accordance with the following principles:</div>
            <div>2.1.1. Lawful and fair basis for processing Personal Data. The Operator takes all necessary measures to comply with the requirements of the Legislation, doesn’t process Personal Data in events not allowed by Law, doesn’t use Personal Data to the detriment of the User.</div>
            <div>2.1.2. Processing only those Personal Data compatible with stated purposes of their processing. The conformity of the content and volume of Personal Data to the stated purposes of processing. Preventing the processing of Personal Data not compatible with the purposes of collection of Personal Data and excessive in relation to the declared purposes of their processing.</div>
            <div>The Operator processes Personal Data exclusively for the purpose of execution of contractual obligations to the user.</div>
            <div>2.1.3. Ensuring the accuracy, adequacy and relevance of Personal Data in relation to purposes of Personal Data processing. The Operator takes all reasonable measures to maintain the relevance of the processed Personal Data, including but not limited to the realization of the right of every Subject to receive their Personal Data and demand from the Operator their blocking or destruction in the event that personal data are incomplete, outdated, inaccurate, illegally obtained or not necessary for the stated purpose of processing.</div>
            <div>2.1.4. The storage of personal data must be carried out in a form that allows the subject of Personal Data to be determined no longer than the purpose of processing Personal Data requires, unless the period of Personal Data storage is established by a federal law, a contract to which the subject of Personal Data is a party whose beneficiary or guarantor is the subject.</div>
            <div>2.1.5. Inadmissibility of combining databases containing User's information created for incompatible with each other purposes.</div>
        </div>
        <div class="privacyPolicyOrange">CONDITIONS FOR PROCESSING PERSONAL DATA</div>
        <div class="termsAndDefinationDiv" id= "conditionsDiv">
            <div>3.1. Processing of Personal Data by Operator is allowed in the following cases:</div>
            <div>3.1.1. Processing of Personal Data is carried out with the consent of the User to the processing of their Personal Data. The consent is the Registration on the Site by submitting the necessary information or authorization via social networks.</div>
            <div>3.1.2. When the Personal Data of the Personal Data Subject is transferred by the User through the Site, the User guarantees that he has previously obtained consent from the Personal Data Subject for the transfer of Personal Data to the Operator.</div>
            <div>3.1.3. Processing of Personal data subject to publication or mandatory disclosure in accordance with federal law.</div>
            <div>3.2. The Operator doesn’t disclose to third parties or distribute the Personal Data without the consent of the User unless otherwise provided by Legislation.</div>
            <div>3.3. The Operator doesn’t process Personal Date related to special categories of personal data concerning racial or ethnic origin, political opinions, religious or philosophical beliefs, health or sexual life, membership in public associations except in the instances envisaged by Legislation.</div>
            <div>3.4. The Operator carries out cross-border transfer of Users’ Personal Data.</div>
            <div>3.5. By providing the User with the opportunity to use the Site, Operator, acting reasonably and in good faith, considers that the User:</div>
            <div>3.5.1. Possesses all the necessary rights allowing them to register and authorize on the Site and use it.</div>
            <div>3.5.2. Realizes that the personal information shared by the User on the Site, particularly their surname, name and location at a certain point in time, is or may be available for other Users of the Site and Internet users and may be copied and distributed by those Users.</div>
            <div>3.5.3. Is aware that some kinds of information transferred by them to other Users can’t be deleted by the User.</div>
            <div>3.6. The Operator doesn’t verify the accuracy of collected information about the User except when the verification is necessary in order to comply with the applicable law and/or obligations to the User.</div>
        </div>
        <div class="privacyPolicyOrange">COLLECTING AND PROCESSING OF PERSONAL AND OTHER DATA</div>
        <div class="termsAndDefinationDiv" id= "collectingDiv">
            <div>4.1. The Operator collects and stores only those Personal Data that are necessary for provision of services to User and distribution of information and advertising materials to User via the Site. Personal Data may be collected both through the Site and at the Operator’s office.</div>
            <div>4.2. The Operator processes Personal Data with the purposes:</div>
            <div>4.2.1. The implementation of activities provided by the Charter of the Company, existing legislation of Russian Federation.</div>
            <div>4.2.2. Fulfillment of the Operator's obligations to send information and advertising materials to the User.</div>
            <div>4.2.3. For communication with Users, if necessary, including sending notifications, information and requests related to the provision of services, and processing of the applications and requests of Users.</div>
            <div>4.2.4. To improve the quality of services provided by the Operator.</div>
            <div>4.2.5. To promote services on the market through direct contacts with Users.</div>
            <div>4.2.6. To conduct statistical and other studies based on impersonal data.</div>
            <div>4.3. For the purposes specified in paragraphs 4.2.1–4.2.6 of the Agreement, the Operator processes the following Personal Data:</div>
            <div>a) name;      b) surname;     c) second name;      d) email address;    e) gender;      f) date of birth;     g) payment details;      h) phone number;      i) residential address;</div>
            <div>j) postal code;       k) place of residence;      l) bank card expiration date;         m) passport number;          n) date of passport issue;          o) place of birth;</div>
            <div>p) issuing authority.</div>
            <div>4.3.1. The Operator processes the following information/data:</div>
            <div>a) technical data that are automatically transmitted by the device the Site is used with, including technical characteristics of the device and the software;</div>
            <div>b) information stored in cookie files (small files containing the information that was sent to the device from the visited websites);</div>
            <div>c) information about the browser;</div>
            <div>d) information about the time and date of access to the Site;</div>
            <div>e) information about the date of the User’s purchases including the number of the order, the cost of the order and the date of the order;</div>
            <div>f) information about Cash back including the amount and the date of receiving the Cash back.</div>
            <div>4.3.2. The data provided by the User at the request of the Operator sent to the User in events of necessity for example for the purpose of suppressing violations of the rights and legitimate interests of third parties. The Operator has the right to request a copy of the identity document or other documents containing the name, the surname and the photo of the User and other additional information necessary and sufficient to identify such a User and allowing the exclusion of abuse and violation of the rights of third parties at the discretion of the Operator.</div>
            <div>4.4. For the purposes specified in paragraphs 4.2.1–4.2.6 of the Agreement, the Operator processes the following information/data:</div>
            <div>4.4.1. Standard technical and other data automatically received by the Operator when the User accesses the Site and subsequent actions of the User on the Site (location at a certain point in time, IP-address, the operating system of the User’s device, sections of the Site visited by the User).</div>
            <div>4.4.2. Information additionally shared by the User on the Site including photographs, comments and other personal information.</div>
            <div>4.4.3. Information obtained as a result of the User's actions on the Site.</div>
            <div>4.4.4. Information obtained as a result of other Users’ actions on the Site Информация, полученная в результате действий других Пользователей на Сайте.</div>
            <div>4.5. Personal Data and other User’s Data shall be kept confidential except when these data are publicly available.</div>
            <div>4.6. The operator has the right to keep an archive copy of Personal Data and other Data indefinetely, including after the deletion of the account.</div>
            <div>4.7. The Operator has the right to transmit Personal Data and other User Data without the User's consent to the following persons:</div>
            <div>4.7.1. State bodies, including the bodies of inquiry and investigation, and local self-government bodies on their reasoned request.</div>
            <div>4.7.2. To the Operator's Partners for the purpose of fulfilling the contractual obligations to the User.</div>
            <div>4.7.3. In other cases established by existing legislation of Russian Federation.</div>
            <div>4.8. The Operator has the right to transfer Personal Data and other Data to third parties not specified in paragraph 4.7 of this Policy in the following cases:</div>
            <div>4.8.1. The user has expressed his consent to such actions.</div>
            <div>4.8.2. The transfer is necessary in the use of the Site by the User.</div>
            <div>4.8.3. The transfer occurs in the event of sale or other transfer of business (in whole or in part), and all the compliance obligations of this Policy devolve on the acquirer.</div>
            <div>4.9. The operator performs automated and manual Personal and other Data processing.</div>
            <div>4.10. Access to information systems containing Personal Data is provided by a password system. Passwords are set by authorized employees of the Operator and are given individually to the Operator’s employees who have an access to Personal Data/Data.</div>
            <div>4.11. In case the Operator of Personal Data receives the revocation of the consent from the Personal Data Subject, the Operator is obliged to delete Personal Data within 30 days from the moment of its receipt.</div>
            <div>Personal Data of the User is deleted from the Site when the Operator deletes the information shared by User as well as from the Personal Account of the User at User’s request or on their own initiative in the events provided by License Agreement. After the deletion of Personal Data from the Site the Operator stores them on its electronic media during the period established by the legislation of Russian Federation.</div>
            <div>4.12. The Operator doesn't bear responsibility for the disclosure of the User's Personal Data by other Users of the Site and Internet users who have access to such data. The operator recommends that Users take a responsible approach to the amount of personal information shared on the Site.</div>
            <div>4.13. The User understands that in the events of deleting Personal Data (or other User’s information) from the User’s personal account or deleting the personal account from the Site, the information copied by other users may be stored.</div>
        </div>
        <div class="privacyPolicyOrange">CHANGE OF PERSONAL DATA</div>
        <div class="termsAndDefinationDiv" id= "changeDiv">
            <div>5.1. The User may at any time modify (update, supplement) Personal Data, personal information on their Personal Account on the Site in conditions such changes and corrections contain relevant information by sending the written application to the Operator or making the changes on the Personal account on the Site.</div>
            <div>5.2. The User has the right to delete Personal Data/Data at any time.</div>
        </div>
        <div class="privacyPolicyOrange">CONFIDENTIALITY OF PERSONAL DATA</div>
        <div class="termsAndDefinationDiv" id= "conditentality">
            <div>6.1. The Operator ensures the confidentiality of processed Personal Data/Data in the procedure established by the Legislation. Ensuring the confidentiality is not required for:</div>
            <div>6.1.1. Personal Data after their depersonalization.</div>
            <div>6.1.2. Personal Data, access of an unlimited circle of persons to which is provided by the User or at their request (Personal Data made public by User).</div>
            <div>6.1.3. The Personal Data that are subject to publication or compulsory disclosure in accordance with the Legislation.</div>
            <div>6.2. The transfer of Personal Data to the third parties acting on the basis of the Agreement with the Operator for the fulfillment of obligations to the User isn’t the violation of the confidentiality of Personal Data.</div>
        </div>
        <div class="privacyPolicyOrange">CONTACT INFORMATION</div>
        <div class="termsAndDefinationDiv" id= "contact">
            <div>9.4. The Operator reserves the right to make changes to this Policy unilaterally without prior agreement with the User. The revised Policy takes effect the next day from the date of its posting on the Site.</div>
            <div>9.5. The User undertakes to independently monitor the changes in the Privacy Policy by reviewing its latest edition.</div>
            <div>10.1. E-mail: support@megabonus.com</div>
            <div>10.2. Address: Klimentos 41-43, Klimentos Tower, Flat/Office 25, 1061, Nicosia, Cyprus.</div>
        </div>
    </div>
</div>

@endsection
