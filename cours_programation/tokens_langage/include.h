#ifndef BA_LEXER_H
#define BA_LEXER_H
#include<stdint.h>
#include<stdlib.h>
/**
   id: [a-zA-Z][a-zA-Z0-9_]*

   type: 'string' | 'number' | 'boolean'

   declaration: {id} ':' {type} ';'

   number: [0-9]+

  expression: {id} |

  assignment: {id} '=' {expression}

  print: 'print' {expresion} ';'

*/

typedef enum{
  TOKEN_ID,
  TOKEN_COLON,
  TOKEN_SEMICOLON,
  TOKEN_VALUE,
  TOKEN_PRINT,

  TOKEN_UNKNOWN,
}TokenType;

typedef struct{
  uint_8 *val;
  TokenType type;
}Token;

#enif