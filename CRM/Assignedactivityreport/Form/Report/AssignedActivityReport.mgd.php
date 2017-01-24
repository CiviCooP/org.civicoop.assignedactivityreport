<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Assignedactivityreport_Form_Report_AssignedActivityReport',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Assigned Activity Report',
      'description' => 'Report to show acctivities assigned to the current user (org.civicoop.assignedactivityreport)',
      'class_name' => 'CRM_Assignedactivityreport_Form_Report_AssignedActivityReport',
      'report_url' => 'org.civicoop.assignedactivityreport/assignedactivityreport',
      'component' => '',
    ),
  ),
);
