<?php

## Config file for BOB ##
## All settings must be specified, except for these (which will revert to internal defaults if omitted): dbHostname

# Unique name for this ballot
$config['id'] = 'testelection';

# Database connection details
$config['dbHostname'] = 'localhost';
$config['dbDatabase'] = 'votes';
$config['dbPassword'] = 'your_password_goes_here';
$config['dbDatabaseStaging'] = false;	// or a different database name if the configuration is shifted from a staging database before the vote opens to the main append-only database
$config['dbUsername'] = 'testvote';
$config['dbSetupUsername'] = 'testvotesetup';

# Optional database table containing the config which the dbSetupUsername has SELECT rights on
$config['dbConfigTable'] = 'instances';


# The database table must contain these fields, in addition to id as above:
# title,urlMoreInfo,emailReturningOfficer,emailTech,officialsUsernames,ballotStart,ballotEnd,ballotViewable,randomisationInfo,referendumThresholdPercent,frontPageMessageHtml,afterVoteMessageHtml,adminDuringElectionOK,organisationName,organisationUrl,organisationLogoUrl,headerLocation,footerLocation,electionInfo
# However, urlMoreInfo,referendumThresholdPercent,afterVoteMessageHtml,adminDuringElectionOK,headerLocation,footerLocation are optional fields which need not be created


## End of config; now run the system ##

# Load and run the BOB class
require_once ('BOB.php');
new BOB ($config);

?>
