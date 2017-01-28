<?php 
    $config = array(
                 'lr_entry_rule' => array(
                                    array(
                                            'field' => 'lrDate',
                                            'label' => 'Date',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrNo',
                                            'label' => 'LR No',
                                            'rules' => 'required|integer'
                                         ),
                                     array(
                                            'field' => 'lrTime',
                                            'label' => 'Time',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrFrom',
                                            'label' => 'From',
                                            'rules' => 'required'
                                         ),
                                     array(
                                            'field' => 'lrTo',
                                            'label' => 'To',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrBillTo',
                                            'label' => 'Bill To',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'vehId',
                                            'label' => 'Vehicle',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'driId',
                                            'label' => 'Driver',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrQuntity',
                                            'label' => 'Quntity',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrInvoiceNo',
                                            'label' => 'Invoice No',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrPartNo',
                                            'label' => 'Part No',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrGrNo',
                                            'label' => 'Gr/Lr No',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'lrFright',
                                            'label' => 'Fright',
                                            'rules' => 'required|integer'
                                         )
                                   
                                    ),
                  'singup' => array(
                                    array(
                                            'field' => 'userName',
                                            'label' => 'User Name',
                                            'rules' => 'required|alpha|trim'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         )
                                   
                                    )
                                    
               );