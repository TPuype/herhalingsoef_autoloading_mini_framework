<?php

function normalize_submitted_data(array $submittedData): array
{
    $normalizedData = [
        'firstName' =>
        isset($submittedData['firstName'] ) && !is_numeric($submittedData['firstName'])
            ? (string)$submittedData['firstName']
            : '',
        'lastName' =>
        isset($submittedData['lastName']) && !is_numeric($submittedData['lastName'])
            ? (string)$submittedData['lastName']
            : '',
    ];

    return $normalizedData;
}

function validate_normalized_data(array $normalizedData): array
{
    $formErrors = [];

    if ($normalizedData['firstName'] === '') {
        $formErrors['firstName'] = 'Please provide a valid first name';
    }

    if ($normalizedData['lastName'] === '') {
        $formErrors['lastName'] = 'Please provide a valid last name';
    }

    return $formErrors;
}
