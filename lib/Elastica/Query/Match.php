<?php
namespace Elastica\Query;

/**
 * Match query.
 *
 * Class is for backward compatibility reason. For PHP 8 and above use MatchQuery as Match is reserved keyword.
 *
 * @deprecated use MatchQuery instead as match is reserved keyword.
 */
class Match extends MatchQuery
{

}
