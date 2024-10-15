import React from 'react';
import Stack from '@mui/material/Stack';
import Button from '@mui/material/Button';


const Answer = (props) => {
    return(
        <Stack spacing={2} direction="row">
            <Button variant="outlined">
                {props.content}
            </Button>
        </Stack>

    )

}

export default Answer

