<?php
/*
 * LimeSurvey
 * Copyright (C) 2013 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 *
 * 	$Id: ls\models\SurveyLink.php 11999 2012-01-12 10:26:32Z gautamgupta $
 * 	Files Purpose: lots of common functions
 */
namespace ls\models;

use ls\models\ActiveRecord;
use ls\models\ParticipantAttributeName;

/**
 * Class ls\models\ParticipantAttribute
 * @property string $value;
 * @property int $attribute_id;
 * @property string $participant_id;
 */
class ParticipantAttribute extends ActiveRecord
{

    /**
     * Returns the setting's table name to be used by the model
     *
     * @access public
     * @return string
     */
    public function tableName()
    {
        return '{{participant_attribute}}';
    }

    public function relations()
    {
        return [
            'name' => [self::BELONGS_TO, ParticipantAttributeName::class, 'attribute_id'],
            'participant' => [self::BELONGS_TO, ParticipantAttributeName::class, 'participant_id']
        ];
    }


}

